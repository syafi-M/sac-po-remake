<?php

namespace App\Http\Controllers;

use App\Models\ImgBanner;
use App\Models\ImgClient;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $client = ImgClient::all();
        $artikel = Post::all();
        $banner = ImgBanner::all();
        return view('dashboard', compact('client', 'artikel', 'banner'));
    }
    public function seeArtikel($id){
        $artikel = Post::findOrFail($id);
        return view('layanan.artikel', compact('artikel'));
    }
    public function profil(){
        return view('about-us.profile');
    }
    public function porto(){
        return view('about-us.porto');
    }
    public function galeri(){
        return view('about-us.galeri');
    }
    public function client(){
        $client = ImgClient::all();
        return view('about-us.client', compact('client'));
    }
    public function companyProfile(){
        return view('about-us.companyProfile');
    }
    public function kontak(){
        return view('about-us.kontak');
    }
    public function outsourcing(){
        return view('layanan.outsourcing');
    }
}
