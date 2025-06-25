<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Surat;
use File;
use Alert;

class PengantarkkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idprofile =  Auth::user()->profile->id;
        
        $mypost = Surat::where('profile_id', $idprofile)->where('jenis', 'surat pengantar nikah')->first();
        $kk = Surat::get()->where('profile_id', $idprofile)->where('jenis', 'surat pengantar nikah');
        

        return view('pengantarkk.pengantarkk', ['kk'=>$kk], ['mypost'=>$mypost]);
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
        return view ('pengantarkk.pengantarkkadd', ['profile'=>$profile,]);
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

        Alert::success('Berhasil', 'Silahkan Lengkapi Data!');

        return redirect('/lengkapisuratkk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kk = Surat::get()->where('id', $id)->first();

        return view('pengantarkk.detailsuratpengantarkk', ['kk'=>$kk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
