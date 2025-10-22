<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImgBannerRequest;
use App\Models\ImgBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImgBannerController extends Controller
{
    public function index()
    {
        $banner = ImgBanner::paginate(25);
        return view('admin.img_banner.index', compact('banner'));
    }

    public function create()
    {
        return view('admin.img_banner.create');
    }

    public function store(ImgBannerRequest $request)
    {
        try {
            $banners = new ImgBanner();
            $banner = [
                'img' => $request->img,
            ];

            if($request->hasFile('img'))
            {
                $banner['img'] = UploadImage($request, 'img');
            }

            $banners->create($banner);
            toastr()->success('Banner Has Been Created!', 'success');
            return to_route('banners.index');
        } catch (\Illuminate\Http\Exceptions\PostTooLargeException $e) {
            toastr()->error('The image is too large. Please upload a smaller image (max 20MB).', 'error');
            return redirect()->back();
        } catch (\Exception $e) {
            \Log::error('Banner creation failed: ' . $e->getMessage());
            toastr()->error('Banner Failed To Created!', 'error');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $banner = ImgBanner::findOrFail($id);
        return view('admin.img_banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banners = ImgBanner::findOrFail($id);
        $banner = [
            'img' => $request->img,
        ];

        if($request->hasFile('img'))
        {
            if($request->oldImg)
            {
                Storage::disk('public')->delete('images/' . $request->oldImg);
            }
            $banner['img'] = UploadImage($request, 'img');
        }

        try {
            $banners->update($banner);
            toastr()->success('Banner Has Been Updated!', 'succcess');
            return to_route('banners.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            return redirect()->back();
            toastr()->error('Banner Failed To Updated', 'error');
        }

    }

    public function destroy($id)
    {
        $banners = ImgBanner::findOrFail($id);
        Storage::disk('public')->delete('images/' . $banners->img);
        $banners->delete();
        toastr()->warning('Banner Has Been Deleted!', 'warning');
        return redirect()->back();
    }
}
