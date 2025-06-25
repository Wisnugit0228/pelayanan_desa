<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Surat;
use File;
use Alert;


class StatusnikahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idprofile =  Auth::user()->profile->id;
        
        $mypost = Surat::where('profile_id', $idprofile)->where('jenis', 'surat keterangan janda/duda')->first();
        $nikah = Surat::get()->where('profile_id', $idprofile)->where('jenis', 'surat keterangan janda/duda');
        

        return view('statusnikah.statusnikah', ['nikah'=>$nikah], ['mypost'=>$mypost]);
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
        return view ('statusnikah.statusnikahadd', ['profile'=>$profile,]);
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
            'nik'=> 'required',
            'gender'=> 'required',
            'kerja'=> 'required',
            'agama'=> 'required',
            'warga'=> 'required',
            'nikah'=> 'required',
            'ttl'=> 'required',
            'tempat'=> 'required',
            
            'alamat'=> 'required',
            'status'=> 'required',
            'profile_id'=> 'required'
            
        ]);



        $surat = new Surat;
        $surat->nama = $request->nama;
        $surat->nik = $request->nik;
        $surat->gender = $request->gender;
        $surat->kerja = $request->kerja;
        $surat->agama = $request->agama;
        $surat->warga = $request->warga;
        $surat->nikah = $request->nikah;
        $surat->ttl = $request->ttl;
        $surat->tempat = $request->tempat;
       
        $surat->jenis = $request->jenis;
        $surat->alamat = $request->alamat;
        $surat->status = $request->status;
        $surat->profile_id = $request->profile_id;

        $surat->save();
        
        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('../lengkapisuratstatus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nikah = Surat::get()->where('id', $id)->first();

        return view('statusnikah.detailsuratstatusnikah', ['nikah'=>$nikah]);
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
