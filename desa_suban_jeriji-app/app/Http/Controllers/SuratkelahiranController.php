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

class SuratkelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idprofile =  Auth::user()->profile->id;
        
        $mypost = Surat::where('profile_id', $idprofile)->where('jenis', 'surat keterangan kelahiran')->first();
        $lahir = Surat::get()->where('profile_id', $idprofile)->where('jenis', 'surat keterangan kelahiran');
        

        return view('suratlahir.suratlahir', ['lahir'=>$lahir], ['mypost'=>$mypost]);
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
        return view ('suratlahir.suratlahiradd', ['profile'=>$profile, 'mytime'=>$mytime]);
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
            
            'alamat'=> 'required',
            'profile_id'=> 'required',
            'status'=> 'required'
            
        ]);



        $suratdomisili = new Surat;
        $suratdomisili->nama = $request->nama;
        $suratdomisili->gender = $request->gender;
        $suratdomisili->tempat = $request->tempat;
        $suratdomisili->ttl = $request->ttl;
        $suratdomisili->warga = $request->warga;
        $suratdomisili->agama = $request->agama;
        $suratdomisili->alamat = $request->alamat;
        $suratdomisili->jenis = $request->jenis;
        $suratdomisili->status = $request->status;
        $suratdomisili->profile_id = $request->profile_id;

        $suratdomisili->save();

        Alert::success('Berhasil', 'Silahkan Lengkapi Data!');

        return redirect('/lengkapisuratkelahiran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lahir = Surat::get()->where('id', $id)->first();

        return view('suratlahir.detailsuratlahir', ['lahir'=>$lahir]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelahiran $kelahiran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelahiran $kelahiran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelahiran  $kelahiran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelahiran $kelahiran)
    {
        //
    }
}
