<?php

namespace App\Http\Controllers;

use App\Models\ImgBanner;
use App\Models\ImgClient;
use App\Models\Post;
use App\Models\User;
use App\Models\Kerjasama;
use App\Models\Coop;
use App\Models\Videos;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $client = ImgClient::all();
        $coop = Coop::all();
        $artikel = Post::latest()->get();
        $banner = ImgBanner::latest()->get();
        $userCount = User::on('mysql2')->whereNot('devisi_id', 8)->count();
        $kerjasamaCount = Kerjasama::on('mysql2')->count();
        $video = Videos::latest()->get();
        return view('dashboard', compact('client', 'coop' , 'artikel', 'banner', 'userCount', 'kerjasamaCount', 'video'));
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
        $video = Videos::first();
        return view('about-us.companyProfile', compact('video'));
    }
    public function kontak(){
        return view('about-us.kontak');
    }
    public function outsourcing(){
        return view('layanan.outsourcing');
    }
}
