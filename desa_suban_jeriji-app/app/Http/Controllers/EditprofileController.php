<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Ktp;
use App\Models\Surat;
use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EditprofileController extends Controller
{
    public function edit()
    {
        $iduser = Auth::id();
        $detail = Profile::where('user_id', $iduser)->first();
        $mytime = Carbon::now();
        return view('profile.edit', ['detail'=>$detail, 'mytime'=>$mytime]);
    }

    public function editpp()
    {
        $iduser = Auth::id();
        $detail = Profile::where('user_id', $iduser)->first();
        return view('profile.editpp', ['detail'=>$detail]);
    }

    public function beranda(){
        $iduser = Auth::user()->profile->id;
        $surat = Surat::get()->where('profile_id', $iduser)->where('status', 'sukses')->count();
        $cek = Surat::get()->where('profile_id', $iduser)->where('status', 'pengecekan')->count();
        $adu = Pengaduan::get()->where('profile_id', $iduser)->where('status', 'sukses')->count();
        $cekadu = Pengaduan::get()->where('profile_id', $iduser)->where('status', 'pengecekan')->count();
        $ktp = Ktp::get()->where('status', 'pengecekan')->count();
        $surat = Surat::get()->where('profile_id', $iduser)->where('status', 'pengecekan')->count();
        $adu = Pengaduan::get()->where('profile_id', $iduser)->where('status', 'pengecekan')->count();
       
        return view('profile.beranda', ['surat'=>$surat, 'cek'=>$cek, 'adu'=>$adu, 'cekadu'=>$cekadu, 'ktp'=>$ktp,
        'surat'=>$surat,
        'adu'=>$adu]);
    }

    // public function upload($id){
    //     $ktp = Ktp::find($id);
    //     return view('profile.addktp', ['ktp'=>$ktp]);
    // }

    // public function sidebar()
    // {
    //     $iduser = Auth::id();
    //     $detail = Profile::where('user_id', $iduser)->first();
    //     return view('partials.sidebar', ['detail'=>$detail]);
    // }
}
