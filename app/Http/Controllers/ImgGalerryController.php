<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImgGalerryRequest;
use App\Models\ImgGalerry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImgGalerryController extends Controller
{
    public function index()
    {
        $galery = ImgGalerry::paginate(25);
        return view('admin.img_galery.index', compact('galery'));
    }

    public function create()
    {
        return view('admin.img_galery.create');
    }

    public function store(ImgGalerryRequest $request)
    {   
        $galeries = new ImgGalerry();
        $galery = [
            'img' => $request->img,
        ];

        if($request->hasFile('img'))
        {
            $galery['img'] = UploadImage($request, 'img');
        }

        try {
            $galeries->create($galery);
            toastr()->success('Galerry Has Been Created!', 'succcess');
            return to_route('galery.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            toastr()->error('Galerry Failed To Created!', 'error');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $galery = ImgGalerry::findOrFail($id);
        return view('admin.img_galery.edit', compact('galery'));
    }

    public function update(Request $request, $id)
    {
        $galeries = ImgGalerry::findOrFail($id);
        $galery = [
            'img' => $request->img,
        ];

        if($request->hasFile('img'))
        {
            if($request->oldImg)
            {
                Storage::disk('public')->delete('images/' . $request->oldImg);
            }
            $galery['img'] = UploadImage($request, 'img');
        }

        try {
            $galeries->update($galery);
            toastr()->success('Galerry Has Been Updated!', 'succcess');
            return to_route('galery.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            return redirect()->back();
            toastr()->error('Galerry Failed To Updated', 'error');
        }
        
    }

    public function destroy($id)
    {
        $galeries = ImgGalerry::findOrFail($id);
        Storage::disk('public')->delete('images/' . $galeries->img);
        $galeries->delete();
        toastr()->warning('Galerry Has Been Deleted!', 'warning');
        return redirect()->back();
    }
}
