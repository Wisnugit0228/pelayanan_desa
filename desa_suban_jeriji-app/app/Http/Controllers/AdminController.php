<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ktp;
use App\Models\Profile;

use App\Models\Pengaduan;
use App\Models\Surat;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    public function verifikasiktp()
    {
       $ktp = Ktp::get()->where('status', 'pengecekan')->count();
       $surat = Surat::get()->where('status', 'pengecekan')->count();
       $adu = Pengaduan::get()->where('status', 'pengecekan')->count();
        return view('profile.beranda', 
        [
            'ktp'=>$ktp,
            'surat'=>$surat,
            'adu'=>$adu
        ]);
    }


    public function suratusahakeluar()
    {
        $su = Suratusaha::get()->where('status', 'sukses');
        return view('admin.suratusahakeluar', ['su'=>$su]);
    }

    public function suratdomisilikeluar()
    {
        $do = Suratdomisili::get()->where('status', 'sukses');
        return view('admin.suratdomisilikeluar', ['do'=>$do]);
    }

    public function suratmampukeluar()
    {
        $tidak = Surattidakmampu::get()->where('status', 'sukses');
        return view('admin.surattidakmampukeluar', ['tidak'=>$tidak]);
    }

    public function riwayatpengaduan()
    {
        $data = Pengaduan::get()->where('status', 'sukses');
        return view('admin.riwayatpengaduan', ['data'=>$data]);
    }

    public function suratlahirkeluar()
    {
        $lahir = Kelahiran::get()->where('status', 'sukses');
        return view('admin.suratlahirkeluar', ['lahir'=>$lahir]);
    }

    public function suratmatikeluar()
    {
        $mati = Kematian::get()->where('status', 'sukses');
        return view('admin.suratmatikeluar', ['mati'=>$mati]);
    }

    public function suratpengantarktpkeluar()
    {
        $ktp = Pengantarktp::get()->where('status', 'sukses');
        return view('admin.pengantarktpkeluar', ['ktp'=>$ktp]);
    }

    public function all()
    {
        $ktpsurat = Surat::get()->where('jenis', 'surat pengantar KTP')->where('status', 'sukses');
        $domisili = Surat::get()->where('jenis', 'surat keterangan domisili')->where('status', 'sukses');
        $lahir = Surat::get()->where('jenis', 'surat keterangan kelahiran')->where('status', 'sukses');
        $mati = Surat::get()->where('jenis', 'surat keterangan kematian')->where('status', 'sukses');
        $usaha = Surat::get()->where('jenis', 'surat keterangan usaha')->where('status', 'sukses');
        $tidak = Surat::get()->where('jenis', 'surat keterangan tidak mampu')->where('status', 'sukses');
        $kk = Surat::get()->where('jenis', 'surat pengantar nikah')->where('status', 'sukses');
        return view('admin.suratkeluar', [
            'ktpsurat'=>$ktpsurat,
            'domisili'=>$domisili,
            'lahir'=>$lahir,
            'mati'=>$mati,
            'usaha'=>$usaha,
            'tidak'=>$tidak,
            'kk'=>$kk
            
        ]);
    }


    public function permintaan()
    {
        $ktpsurat = Surat::get()->where('jenis', 'surat pengantar KTP')->where('status', 'pengecekan');
        $domisili = Surat::get()->where('jenis', 'surat keterangan domisili')->where('status', 'pengecekan');
        $lahir = Surat::get()->where('jenis', 'surat keterangan kelahiran')->where('status', 'pengecekan');
        $mati = Surat::get()->where('jenis', 'surat keterangan kematian')->where('status', 'pengecekan');
        $usaha = Surat::get()->where('jenis', 'surat keterangan usaha')->where('status', 'pengecekan');
        $tidak = Surat::get()->where('jenis', 'surat keterangan tidak mampu')->where('status', 'pengecekan');
        $kk = Surat::get()->where('jenis', 'surat pengantar nikah')->where('status', 'pengecekan');
        $nikah = Surat::get()->where('jenis', 'surat keterangan janda/duda')->where('status', 'pengecekan');
        $beasiswa = Surat::get()->where('jenis', 'surat rekomendasi beasiswa')->where('status', 'pengecekan');
        return view('admin.permintaansurat', [
            'ktpsurat'=>$ktpsurat,
            'domisili'=>$domisili,
            'lahir'=>$lahir,
            'mati'=>$mati,
            'usaha'=>$usaha,
            'tidak'=>$tidak,
            'kk'=>$kk,
            'nikah'=>$nikah,
            'beasiswa'=>$beasiswa

        ]);
    }

    public function cariminta(Request $request)
    {
        $cari = $request->cari;

		$ktpsurat = DB::table('surat')
        ->where('jenis', 'surat pengantar KTP')
        ->where('status', 'pengecekan')
		->where('jenis','like',"%".$cari."%")
		->paginate();
 
    
        return view('admin.permintaansurat', [
            'ktpsurat'=>$ktpsurat,
            // 'domisili'=>$domisili,
            // 'lahir'=>$lahir,
            // 'mati'=>$mati,
            // 'usaha'=>$usaha,
            // 'tidak'=>$tidak,
            // 'kk'=>$kk,
            // 'nikah'=>$nikah,
            // 'beasiswa'=>$beasiswa

        ]);
    }

    public function notif(){
        $notif = Ktp::get()->where('status', 'pengecekan')->count();
        return view('partials.sidebar', ['notif'=>$notif]);
    }
}
