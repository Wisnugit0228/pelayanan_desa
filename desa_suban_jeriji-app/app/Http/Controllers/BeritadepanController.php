<?php

namespace App\Http\Controllers;
use App\Models\Berita;

use Illuminate\Http\Request;

class BeritadepanController extends Controller
{
    public function berita()
    {
        $berita = Berita::get();
        
       
        return view('utama.halaman', ['berita'=>$berita]);
    }

    public function detail($id)
    {
        $berita = Berita::get()->where('id', $id)->first();

        return view('utama.detail', ['berita'=>$berita]);
    }

    

    public function surat()
    {
        return view('surat.cetaksurat');
    }
    
}
