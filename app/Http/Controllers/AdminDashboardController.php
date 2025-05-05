<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ImgClient;
use App\Models\ImgBanner;
use App\Models\Coop;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        $postCount = Post::count();
        $post = Post::latest()->first();
        
        $clientCount = ImgClient::count();
        $client = ImgClient::latest()->first();
        
        $bannerCount = ImgBanner::count();
        $banner = ImgBanner::latest()->first();
        
        $kerjasamaCount = Coop::count();
        $kerjasama = Coop::latest()->first();
        
        // dd($kerjasama);
        return view('admin.dashboard', compact('postCount', 'post', 'clientCount', 'client', 'bannerCount', 'banner', 'kerjasamaCount', 'kerjasama'));
    }
   
}
