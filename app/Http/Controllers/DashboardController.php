<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
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
        return view('about-us.client');
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
