<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Surat;
use File;
use Alert;

class SuratdomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idprofile =  Auth::user()->profile->id;
        // $category = Profile::get();
        
        $mypost = Surat::where('profile_id', $idprofile)->where('jenis', 'surat keterangan domisili')->first();
        $suratdomisili = Surat::get()->where('profile_id', $idprofile)->where('jenis', 'surat keterangan domisili');
        

        return view('suratdomisili.suratdomisili', ['suratdomisili'=>$suratdomisili], ['mypost'=>$mypost]);
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
        $data = Profile::where('user_id', $iduser)->first();
        return view ('suratdomisili.suratdomisiliadd', ['profile'=>$profile, 'data'=>$data]);
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
            'tempat'=> 'required',
            'ttl'=> 'required',
            'warga'=> 'required',
            'agama'=> 'required',
            'nikah'=> 'required',
            'alamat'=> 'required',
            'kerja'=> 'required',
            'profile_id'=> 'required',
            'status'=> 'required'
            
        ]);



        $suratdomisili = new Surat;
        $suratdomisili->jenis = $request->jenis;
        $suratdomisili->nama = $request->nama;
        $suratdomisili->nik = $request->nik;
        $suratdomisili->gender = $request->gender;
        $suratdomisili->tempat = $request->tempat;
        $suratdomisili->ttl = $request->ttl;
        $suratdomisili->warga = $request->warga;
        $suratdomisili->agama = $request->agama;
        $suratdomisili->nikah = $request->nikah;
        $suratdomisili->alamat = $request->alamat;
        $suratdomisili->kerja = $request->kerja;
        $suratdomisili->status = $request->status;
        $suratdomisili->profile_id = $request->profile_id;

        $suratdomisili->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('../lihatsuratdomisili');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suratdomisili  $suratdomisili
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suratdomisili = Surat::get()->where('id', $id)->first();

        return view('suratdomisili.detailsuratdomisili', ['suratdomisili'=>$suratdomisili]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suratdomisili  $suratdomisili
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $domisili = Surat::find($id);
        $iduser = Auth::id();
        $data = Profile::where('user_id', $iduser)->first();

        return view ('suratdomisili.editsuratdomisili', ['domisili'=>$domisili, 'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suratdomisili  $suratdomisili
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required',
            'profile_id'=> 'required',
            'status'=> 'required'
        ]);

        $domisili = Suratdomisili::find($id);
       

        $domisili->jenis = $request['jenis'];
        $domisili->status = $request['status'];
        $domisili->profile_id = $request['profile_id'];
        $domisili->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('lihatsuratdomisili');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suratdomisili  $suratdomisili
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suratdomisili $suratdomisili)
    {
        //
    }
}
