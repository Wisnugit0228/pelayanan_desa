<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class UtamaController extends Controller
{
    public function index()
    {
        return view('utama.utama');
    }

    public function index1()
    {
        return view('utama.beranda');
    }

    public function indexutama()
    {
        $berita = Berita::get();
        
       
        return view('utama.halaman', ['berita'=>$berita]);
       
    }

    public function berita()
    {
        
    }
    
}
