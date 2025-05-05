<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImgClientRequest;
use App\Models\ImgClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImgClientController extends Controller
{
    public function index()
    {
        $client = ImgClient::paginate(25);
        return view('admin.img_client.index', compact('client'));
    }

    public function create()
    {
        return view('admin.img_client.create');
    }

    public function store(ImgClientRequest $request)
    {   
        $clients = new ImgClient();
        $client = [
            'img' => $request->img,
            'name' => $request->name,
        ];

        if($request->hasFile('img'))
        {
            $client['img'] = UploadImage($request, 'img');
        }

        try {
            $clients->create($client);
            toastr()->success('Client Has Been Created!', 'succcess');
            return to_route('client.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            toastr()->error('Client Failed To Created!', 'error');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $client = ImgClient::findOrFail($id);
        return view('admin.img_client.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $clients = ImgClient::findOrFail($id);
        $client = [
            'img' => $request->img,
        ];

        if($request->hasFile('img'))
        {
            if($request->oldImg)
            {
                Storage::disk('public')->delete('images/' . $request->oldImg);
            }
            $client['img'] = UploadImage($request, 'img');
        }

        try {
            $clients->update($client);
            toastr()->success('Client Has Been Updated!', 'succcess');
            return to_route('client.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            return redirect()->back();
            toastr()->error('Client Failed To Updated', 'error');
        }
        
    }

    public function destroy($id)
    {
        $clients = ImgClient::findOrFail($id);
        Storage::disk('public')->delete('images/' . $clients->img);
        $clients->delete();
        toastr()->warning('Client Has Been Deleted!', 'warning');
        return redirect()->back();
    }
}
