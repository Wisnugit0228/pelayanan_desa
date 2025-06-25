<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Surat;
use Carbon\Carbon;
use File;
use Alert;

class PengantarktpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idprofile =  Auth::user()->profile->id;
        
        $mypost = Surat::where('profile_id', $idprofile)->where('jenis', 'surat pengantar KTP')->first();
        $ktp = Surat::get()->where('profile_id', $idprofile)->where('jenis', 'surat pengantar KTP');
        

        return view('pengantarktp.pengantarktp', ['ktp'=>$ktp], ['mypost'=>$mypost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = Auth::user()->profile->id; 
        $iduser = Auth::id();
        $mytime = Carbon::now();
        return view ('pengantarktp.pengantarktpadd', ['profile'=>$profile, 'mytime'=>$mytime]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'nama'=> 'required',
            'tempat'=> 'required',
            'ttl'=> 'required',
            'gender'=> 'required',
            'kerja'=> 'required',
            'warga'=> 'required',
            'agama'=> 'required',
            'nikah'=> 'required',
            'alamat'=> 'required',
            'status'=> 'required',
            'profile_id'=> 'required'
            
        ]);



        $ktp = new Surat;
        $ktp->nama = $request->nama;
        $ktp->tempat = $request->tempat;
        $ktp->ttl = $request->ttl;
        $ktp->gender = $request->gender;
        $ktp->kerja = $request->kerja;
        $ktp->warga = $request->warga;
        $ktp->agama = $request->agama;
        $ktp->nikah = $request->nikah;
        $ktp->alamat = $request->alamat;
        $ktp->status = $request->status;
        $ktp->profile_id = $request->profile_id;
        $ktp->jenis = $request->jenis;

        $ktp->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('/lengkapisuratpengantarktp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengantarktp  $pengantarktp
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ktp = Surat::get()->where('id', $id)->first();

        return view('pengantarktp.detailpengantar', ['ktp'=>$ktp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengantarktp  $pengantarktp
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengantarktp $pengantarktp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengantarktp  $pengantarktp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengantarktp $pengantarktp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengantarktp  $pengantarktp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengantarktp $pengantarktp)
    {
        //
    }
}
