<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::paginate(2);
        return view('admin.post.index', compact('post'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(PostRequest $request)
    {
        $posts = new Post();
        $post = [
            'title' => $request->title,
            'img' => $request->img,
            'desc' => $request->desc,
            'author' => $request->author
        ];

        if($request->hasFile('img'))
        {
            $post['img'] = UploadImage($request, 'img');
        }


            try {
                $posts->create($post);
                toastr()->success('Post Has Been Created!', 'succcess');
                return to_route('post.index');
            } catch (\Illuminate\Database\QueryException $e) {
                //throw $th;
                toastr()->error('Post Failed To Created!', 'error');
                return redirect()->back();
            }
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $posts = Post::findOrFail($id);

        $post = [
            'title' => $request->title,
            'img' => $request->img,
            'desc' => $request->desc,
            'author' => $request->author,

        ];

        if($request->hasFile('img'))
        {
            if($request->oldImg)
            {
                Storage::disk('public')->delete('images/' . $request->oldImg);
            }
            $post['img'] = UploadImage($request, 'img');
        }

        if(Auth::user()->name == $request->author)
        {
            try {
                $posts->update($post);
                toastr()->success('Post Has Been Updated!', 'succcess');
                return to_route('post.index');
            } catch (\Illuminate\Database\QueryException $e) {
                //throw $th;
                return redirect()->back();
                toastr()->error('Post Failed To Updated', 'error');
            }
        }

    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        Storage::disk('public')->delete('images/' . $post->img);
        $post->delete();
        toastr()->warning('Post Has Been Deleted!', 'warning');
        return redirect()->back();
    }
}
