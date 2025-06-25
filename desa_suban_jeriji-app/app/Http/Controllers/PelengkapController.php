<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\Dokumen;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use Alert;

class PelengkapController extends Controller
{
    public function usaha()
    {
        $idprofile =  Auth::user()->profile->id;
        // $mypost = Surat::where('profile_id', $idprofile)->last();
        $usaha = Surat::get()->where('jenis', 'surat keterangan usaha')->where('profile_id', $idprofile)->last();
        

        return view('surat.pelengkap',['usaha'=>$usaha]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg',
            'namausaha'=> 'required',
            'jenisusaha'=> 'required',
            'mulaiusaha'=> 'required',
            'alamatusaha'=> 'required',
            'surat_id' => 'required'

            
            
            
        ]);

        $fileName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('suratusaha'), $fileName);

        $surat = new Dokumen;
        $surat->foto = $fileName;
        $surat->namausaha = $request->namausaha;
        $surat->jenisusaha = $request->jenisusaha;
        $surat->mulaiusaha = $request->mulaiusaha;
        $surat->alamatusaha = $request->alamatusaha;
        $surat->surat_id = $request->surat_id;

        $surat->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('../lihatsuratusaha');
      
    }


    public function kelahiran()
    {
        $idprofile =  Auth::user()->profile->id;
        // $mypost = Surat::where('profile_id', $idprofile)->last();
        $lahir = Surat::get()->where('jenis', 'surat keterangan kelahiran')->where('profile_id', $idprofile)->last();
        

        return view('suratlahir.pelengkap',['lahir'=>$lahir]);
    }

    public function storelahir(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg',
            'namaayah'=> 'required',
            'namaibu' => 'required',
            'surat_id' => 'required'

            
            
            
        ]);

        $fileName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('ktp'), $fileName);
        

       
        $surat = new Dokumen;
        $surat->foto = $fileName;
        $surat->namaayah = $request->namaayah;
        $surat->namaibu = $request->namaibu;
        $surat->surat_id = $request->surat_id;

        $surat->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('../lihatsuratlahir');
      
    }

    public function status()
    {
        $idprofile =  Auth::user()->profile->id;
        // $mypost = Surat::where('profile_id', $idprofile)->last();
        $status = Surat::get()->where('jenis', 'surat keterangan janda/duda')->where('profile_id', $idprofile)->last();
        

        return view('statusnikah.pelengkap',['status'=>$status]);
    }

    public function storestatus(Request $request)
    {
        $request->validate([
            
            'foto' => 'required|image|mimes:jpg,png,jpeg',
            'statusnikah'=> 'required',
            'surat_id' => 'required'
            
        ]);

        $fileName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('fotopelengkap'), $fileName);

        $surat = new Dokumen;
      
        $surat->foto = $fileName;
        $surat->statusnikah = $request->statusnikah;
        $surat->surat_id = $request->surat_id;

        $surat->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('../lihatsuratstatusnikah');
    }

    public function ktp()
    {
        $idprofile =  Auth::user()->profile->id;
        // $mypost = Surat::where('profile_id', $idprofile)->last();
        $ktp = Surat::get()->where('jenis', 'surat pengantar KTP')->where('profile_id', $idprofile)->last();
        

        return view('pengantarktp.pelengkap',['ktp'=>$ktp]);
    }

    public function storektp(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg',
            'foto1' => 'required|image|mimes:jpg,png,jpeg',
            'foto2' => 'required|image|mimes:jpg,png,jpeg',
            'surat_id' => 'required'
            
        ]);
        $fileName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('fotoprofile'), $fileName);

        $fileName1 = time().'.'.$request->foto1->extension();
        $request->foto1->move(public_path('fotopelengkap'), $fileName1);

        $fileName2 = time().'.'.$request->foto2->extension();
        $request->foto2->move(public_path('fotopelengkap'), $fileName2);

        $surat = new Dokumen;
      
        $surat->foto = $fileName;
        $surat->foto1 = $fileName1;
        $surat->foto2 = $fileName2;
        $surat->surat_id = $request->surat_id;

        $surat->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('../lihatsuratpengantarktp');
    }

    public function rekomendasi()
    {
        $idprofile =  Auth::user()->profile->id;
        // $mypost = Surat::where('profile_id', $idprofile)->last();
        $data = Surat::get()->where('jenis', 'surat rekomendasi beasiswa')->where('profile_id', $idprofile)->last();
        

        return view('rekomendasi.pelengkap',['data'=>$data]);
    }

    public function storerekomendasi(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg',
            'foto1' => 'required|image|mimes:jpg,png,jpeg',
            'surat_id' => 'required'
            
        ]);
        $fileName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('fotoprofile'), $fileName);

        $fileName1 = time().'.'.$request->foto1->extension();
        $request->foto1->move(public_path('fotopelengkap'), $fileName1);

       

        $surat = new Dokumen;
      
        $surat->foto = $fileName;
        $surat->foto1 = $fileName1;
        $surat->surat_id = $request->surat_id;

        $surat->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('../lihatsuratrekomendasi');
    }


    public function KK()
    {
        $idprofile =  Auth::user()->profile->id;
        // $mypost = Surat::where('profile_id', $idprofile)->last();
        $data = Surat::get()->where('jenis', 'surat pengantar nikah')->where('profile_id', $idprofile)->last();
        

        return view('pengantarkk.pelengkap',['data'=>$data]);
    }

    public function storerkk(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg',
            'foto1' => 'required|image|mimes:jpg,png,jpeg',
            'surat_id' => 'required'
            
        ]);
        $fileName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('fotopelengkap'), $fileName);

        $fileName1 = time().'.'.$request->foto1->extension();
        $request->foto1->move(public_path('fotopelengkap'), $fileName1);

       

        $surat = new Dokumen;
      
        $surat->foto = $fileName;
        $surat->foto1 = $fileName1;
        $surat->surat_id = $request->surat_id;

        $surat->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('../lihatsuratpengantarkk');
    }
    
}
