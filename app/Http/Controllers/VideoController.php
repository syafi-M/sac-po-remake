<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Videos::latest()->get();
        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'video' => 'required|mimes:mp4,mov,avi|max:256000', // 250MB max
        ]);

        $path = $request->file('video')->store('videos', 'public');

        Videos::create([
            'title' => $request->title,
            'description' => $request->description,
            'video_path' => $path,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video uploaded successfully!');
    }

    public function destroy(Videos $video)
    {
        // Delete the video file from storage
        if (Storage::disk('public')->exists($video->video_path)) {
            Storage::disk('public')->delete($video->video_path);
        }

        // Delete the record from DB
        $video->delete();

        return redirect()->route('videos.index')->with('success', 'Video deleted successfully.');
    }
}
