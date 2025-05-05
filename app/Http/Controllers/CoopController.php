<?php

namespace App\Http\Controllers;

use App\Models\Coop;
use Illuminate\Http\Request;
use App\Http\Requests\CoopRequest;

class CoopController extends Controller
{
    public function index()
    {
        $coop = Coop::paginate(25);
        return view('admin.kerjasama.index', compact('coop'));
    }

    public function create()
    {
        return view('admin.kerjasama.create');
    }

    public function store(CoopRequest $request)
    {   
        $coops = new Coop();
        $coop = [
            'img' => $request->img,
            'name' => $request->name,
        ];

        if($request->hasFile('img'))
        {
            $coop['img'] = UploadImage($request, 'img');
        }

        try {
            $coops->create($coop);
            toastr()->success('Kerjasama Has Been Created!', 'succcess');
            return to_route('kerjasama.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            toastr()->error('Kerjasama Failed To Created!', 'error');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $coop = Coop::findOrFail($id);
        return view('admin.kerjasama.edit', compact('coop'));
    }

    public function update(Request $request, $id)
    {
        $coops = Coop::findOrFail($id);
        $coop = [
            'img' => $request->img,
        ];

        if($request->hasFile('img'))
        {
            if($request->oldImg)
            {
                Storage::disk('public')->delete('images/' . $request->oldImg);
            }
            $coop['img'] = UploadImage($request, 'img');
        }

        try {
            $coops->update($coop);
            toastr()->success('Kerjasama Has Been Updated!', 'succcess');
            return to_route('kerjasama.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            return redirect()->back();
            toastr()->error('Kerjasama Failed To Updated', 'error');
        }
        
    }

    public function destroy($id)
    {
        $coops = Coop::findOrFail($id);
        Storage::disk('public')->delete('images/' . $coops->img);
        $coops->delete();
        toastr()->warning('Kerjasama Has Been Deleted!', 'warning');
        return redirect()->back();
    }
}
