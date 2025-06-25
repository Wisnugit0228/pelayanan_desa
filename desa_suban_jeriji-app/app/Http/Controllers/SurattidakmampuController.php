<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Surat;
use Alert;

class SurattidakmampuController extends Controller
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
        
        $mypost = Surat::where('profile_id', $idprofile)->where('jenis', 'surat keterangan tidak mampu')->first();
        $tidak = Surat::get()->where('profile_id', $idprofile)->where('jenis', 'surat keterangan tidak mampu');
        

        return view('surattidakmampu.surattidakmampu', ['tidak'=>$tidak], ['mypost'=>$mypost]);
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
        
        return view ('surattidakmampu.surattidakmampuadd', ['profile'=>$profile, 'data'=>$data]);
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



        $surat = new Surat;
        $surat->jenis = $request->jenis;
        $surat->nama = $request->nama;
        $surat->nik = $request->nik;
        $surat->gender = $request->gender;
        $surat->tempat = $request->tempat;
        $surat->ttl = $request->ttl;
        $surat->warga = $request->warga;
        $surat->agama = $request->agama;
        $surat->nikah = $request->nikah;
        $surat->alamat = $request->alamat;
        $surat->kerja = $request->kerja;
        $surat->status = $request->status;
        $surat->profile_id = $request->profile_id;

        $surat->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('../lihatsurattidakmampu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surattidakmampu  $surattidakmampu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tidak = Surat::get()->where('id', $id)->first();

        return view('surattidakmampu.detailsurattidakmampu', ['tidak'=>$tidak]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surattidakmampu  $surattidakmampu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tidak = Surat::find($id);

        return view ('surattidakmampu.editsurattidakmampu', ['tidak'=>$tidak]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surattidakmampu  $surattidakmampu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required',
            'profile_id'=> 'required',
            'status'=> 'required'
        ]);

        $tidak = Surattidakmampu::find($id);
       

        $tidak->jenis = $request['jenis'];
        $tidak->status = $request['status'];
        $tidak->profile_id = $request['profile_id'];
        $tidak->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('lihatsurattidakmampu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surattidakmampu  $surattidakmampu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surattidakmampu $surattidakmampu)
    {
        //
    }
}
