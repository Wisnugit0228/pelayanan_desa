<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Surat;
use App\Models\Dokumen;
use File;
use Carbon\Carbon;
use Alert;

class SuratusahaController extends Controller
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
        
        $mypost = Surat::where('profile_id', $idprofile)->where('jenis', 'surat keterangan usaha')->first();
        $suratusaha = Surat::get()->where('profile_id', $idprofile)->where('jenis', 'surat keterangan usaha');
        

        return view('surat.suratusaha', ['suratusaha'=>$suratusaha], ['mypost'=>$mypost]);
        // $usaha = Suratusaha::get();
        // return view('surat.suratusaha', ['usaha'=>$usaha]);
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
        $surat = Surat::get()->last();
        return view ('surat.suratusahaadd', ['profile'=>$profile, 'data'=>$data, 'surat'=>$surat]);
        
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
            'alamat'=> 'required',
            'kerja'=> 'required',
            'profile_id'=> 'required',
            'status'=> 'required',

           
            
            
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
        $surat->alamat = $request->alamat;
        $surat->kerja = $request->kerja;
        $surat->status = $request->status;
        $surat->profile_id = $request->profile_id;

        $surat->save();

        

    

    

        Alert::success('Berhasil', 'Silahkan Lengkapi Data!');

        return redirect('/lengkapisuratusaha');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suratusaha  $suratusaha
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suratusaha = Surat::get()->where('id', $id)->first();

        return view('surat.detailsuratusaha', ['suratusaha'=>$suratusaha]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suratusaha  $suratusaha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suratusaha = Suratusaha::find($id);
        $iduser = Auth::id();
        $data = Profile::where('user_id', $iduser)->first();

        return view ('surat.editsuratusaha', ['suratusaha'=>$suratusaha, 'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suratusaha  $suratusaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,png,jpeg',
            'jenis' => 'required',
            // 'nama'=> 'required',
            // 'nik'=> 'required',
            // 'gender'=> 'required',
            // 'lahir'=> 'required',
            // 'ttl'=> 'required',
            // 'warga'=> 'required',
            // 'agama'=> 'required',
            // 'alamat'=> 'required',
            'namausaha'=> 'required',
            'jenisusaha'=> 'required',
            'mulai'=> 'required',
            'alamatusaha'=> 'required',
            'status'=> 'required',
            'profile_id'=> 'required',
            // 'pekerjaan'=> 'required'
        ]);

        $suratusaha = Suratusaha::find($id);
        if ($request->has('foto')) {
            $patch = 'suratusaha/';
            File::delete($patch.$suratusaha->foto);

            $fileName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('suratusaha'), $fileName);

            $suratusaha->foto = $fileName;


            $suratusaha->save();

        }

        $suratusaha->jenis = $request['jenis'];
        // $suratusaha->nama = $request['nama'];
        // $suratusaha->nik = $request['nik'];
        // $suratusaha->gender = $request['gender'];
        // $suratusaha->lahir = $request['lahir'];
        // $suratusaha->ttl = $request['ttl'];
        // $suratusaha->warga = $request['warga'];
        // $suratusaha->agama = $request['agama'];
        // $suratusaha->alamat = $request['alamat'];
        $suratusaha->namausaha = $request['namausaha'];
        $suratusaha->jenisusaha = $request['jenisusaha'];
        $suratusaha->mulai = $request['mulai'];
        $suratusaha->alamatusaha = $request['alamatusaha'];
        $suratusaha->status = $request['status'];
        $suratusaha->profile_id = $request['profile_id'];
        // $suratusaha->pekerjaan = $request['pekerjaan'];
        $suratusaha->save();

        Alert::success('Berhasil', 'Permintaan Surat Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('lihatsuratusaha');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suratusaha  $suratusaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suratusaha $suratusaha)
    {
        //
    }
}
