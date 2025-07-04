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

class RekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idprofile =  Auth::user()->profile->id;
        
        $mypost = Surat::where('profile_id', $idprofile)->where('jenis', 'surat rekomendasi beasiswa')->first();
        $data = Surat::get()->where('profile_id', $idprofile)->where('jenis', 'surat rekomendasi beasiswa');
        

        return view('rekomendasi.rekomendasi', ['data'=>$data], ['mypost'=>$mypost]);
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
        return view ('rekomendasi.rekomendasiadd', ['profile'=>$profile, 'mytime'=>$mytime]);
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
            'gender'=> 'required',
            'tempat'=> 'required',
            'ttl'=> 'required',
            'warga'=> 'required',
            'agama'=> 'required',
            
            'nik'=> 'required|min:16|max:16',
            'alamat'=> 'required',
            'profile_id'=> 'required',
            'status'=> 'required'
            
        ]);



        $surat = new Surat;
        $surat->nama = $request->nama;
        $surat->gender = $request->gender;
        $surat->tempat = $request->tempat;
        $surat->ttl = $request->ttl;
      
        $surat->warga = $request->warga;
        $surat->agama = $request->agama;
        $surat->nik = $request->nik;
        $surat->alamat = $request->alamat;
        $surat->jenis = $request->jenis;
        $surat->status = $request->status;
        $surat->profile_id = $request->profile_id;

        $surat->save();

        Alert::success('Berhasil', 'Silahkan Lengkapi Data!');

        return redirect('/lengkapisuratrekomendasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
