<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        $postCount = Post::count();
        $post = Post::latest()->first();
        // dd($post ? null : "");
        return view('admin.dashboard', compact('postCount', 'post'));
    }
   
}
