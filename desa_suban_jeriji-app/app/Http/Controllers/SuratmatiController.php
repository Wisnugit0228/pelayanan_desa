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

class SuratmatiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idprofile =  Auth::user()->profile->id;
        
        $mypost = Surat::where('profile_id', $idprofile)->where('jenis', 'surat keterangan kematian')->first();
        $mati = Surat::get()->where('profile_id', $idprofile)->where('jenis', 'surat keterangan kematian');
        

        return view('suratkematian.suratmati', ['mati'=>$mati], ['mypost'=>$mypost]);
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
        return view ('suratkematian.suratmatiadd', ['profile'=>$profile, 'mytime'=>$mytime]);
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
            'nik'=> 'required| min:16|max:16',
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



        $suratdomisili = new Surat;
        $suratdomisili->nama = $request->nama;
        $suratdomisili->nik = $request->nik;
        $suratdomisili->gender = $request->gender;
        $suratdomisili->kerja = $request->kerja;
        $suratdomisili->agama = $request->agama;
        $suratdomisili->warga = $request->warga;
        $suratdomisili->nikah = $request->nikah;
        $suratdomisili->ttl = $request->ttl;
        $suratdomisili->tempat = $request->tempat;
       
        $suratdomisili->jenis = $request->jenis;
        $suratdomisili->alamat = $request->alamat;
        $suratdomisili->status = $request->status;
        $suratdomisili->profile_id = $request->profile_id;

        $suratdomisili->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('../lihatsuratmati');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mati = Surat::get()->where('id', $id)->first();

        return view('suratkematian.detailsuratmati', ['mati'=>$mati]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function edit(Kematian $kematian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kematian $kematian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kematian $kematian)
    {
        //
    }
}
