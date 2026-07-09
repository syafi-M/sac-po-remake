<?php

namespace App\Http\Controllers;

use App\Models\InfoLoker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfoLokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kota = InfoLoker::getUniqueCities();
        $jenisPekerjaan = InfoLoker::getUniqueJobTypes();

        $pekerjaanByKota = InfoLoker::get()->groupBy('city');
        $loker = InfoLoker::active()->latest()->get();

        // dd($pekerjaanByKota, $kota, $jenisPekerjaan, $loker);

        return view('admin.info_loker.index', compact('kota', 'jenisPekerjaan', 'pekerjaanByKota', 'loker'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.info_loker.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'province' => 'nullable|string|max:255',
            'position' => 'required|string|max:255',
            'count' => 'required|min:0',
            'is_active' => 'required',
            'description' => 'string|nullable',
            'contact_person' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email|max:255',
        ]);

        $request['city'] = strtolower($request->city);

        $data = $request->except('img');

        if ($request->hasFile('img')) {
            $data['img'] = UploadImage($request, 'img', 'info_loker');
        }

        // dd($data);

        try {
            InfoLoker::create($data);
            toastr()->success('Info Loker Has Been Created!', 'succcess');
            return to_route('info_loker.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            toastr()->error('Info Loker Failed To Created!', 'error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(InfoLoker $infoLoker)
    {
        $jenisPekerjaan = InfoLoker::byCity($infoLoker->city)->first();
        return json_encode($jenisPekerjaan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InfoLoker $infoLoker)
    {
        return view('admin.info_loker.edit', compact('infoLoker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InfoLoker $infoLoker)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'province' => 'nullable|string|max:255',
            'position' => 'required|string|max:255',
            'count' => 'required|integer|min:0',
            'is_active' => 'required',
            'img' => 'string|nullable',
            'description' => 'string|nullable',
            'contact_person' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email|max:255',
        ]);

        $request['city'] = strtolower($request->city);

        $data = $request->except('img');

        if ($request->hasFile('img')) {
            $data['img'] = UploadImage($request, 'img', 'info_loker');
        }

        try {
            $infoLoker->update($data);
            toastr()->success('Info Loker Has Been Updated!', 'succcess');
            return to_route('info_loker.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            toastr()->error('Info Loker Failed To Updated!', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InfoLoker $infoLoker)
    {
        try {
            Storage::delete('public/' . $infoLoker->img);
            $infoLoker->delete();
            toastr()->success('Info Loker Has Been Deleted!', 'succcess');
            return to_route('info_loker.index');
        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
            toastr()->error('Info Loker Failed To Deleted!', 'error');
            return redirect()->back();
        }
    }
}
