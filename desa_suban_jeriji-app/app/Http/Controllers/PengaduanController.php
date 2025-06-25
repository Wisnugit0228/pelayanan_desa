<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use File;
use Alert;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idprofile =  Auth::user()->profile->id;
        $mypost = Pengaduan::where('profile_id', $idprofile)->first();
        $pengaduan = Pengaduan::get()->where('profile_id', $idprofile);
        return view ('pengaduan.view', ['pengaduan'=>$pengaduan, 'mypost'=>$mypost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = Auth::user()->profile->id;
        return view ('pengaduan.addpengaduan', ['profile'=>$profile]);
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
            'foto' => 'required|image|mimes:jpg,png,jpeg',
            'judul' => 'required',
            'konten'=> 'required',
            'status'=> 'required',
            'profile_id'=> 'required'
            
        ]);


        $fileName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images_pengaduan'), $fileName);

        $post = new Pengaduan;
        $post->foto = $fileName;
        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->status = $request->status;
        $post->profile_id = $request->profile_id;

        $post->save();

        Alert::success('Berhasil', 'Pengaduan Anda Berhasil, Silahkan Menunggu Konfirmasi Admin!');

        return redirect('pengaduanmasyarakat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
