<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use File;
use Alert;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iduser = Auth::id();
        $detail = Profile::where('user_id', $iduser)->first();
        return view('profile.view', ['detail'=>$detail]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg',
            'nama' => 'required',
            'nik'=> 'required|min:16|max:16',
            'tempat'=> 'required',
            'ttl' => 'required',
            'gender' => 'required',
            'warga'=> 'required',
            'agama'=> 'required',
            'pekerjaan'=> 'required',
            'nikah'=> 'required',
            'nohp' => 'required|min:10|max:13',
            'alamat' => 'required'
            
        ]);

        $post = Profile::find($id);

        if ($request->has('foto')) {
            $patch = 'images/';
            File::delete($patch.$post->foto);

            $fileName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('fotoprofile'), $fileName);

            $post->foto = $fileName;


            $post->save();

        }

        $post->nama = $request['nama'];
        $post->nik = $request['nik'];
        $post->tempat = $request['tempat'];
        $post->ttl = $request['ttl'];
        $post->gender = $request['gender'];
        $post->warga = $request['warga'];
        $post->agama = $request['agama'];
        $post->pekerjaan = $request['pekerjaan'];
        $post->nikah = $request['nikah'];
        $post->nohp = $request['nohp'];
        $post->alamat = $request['alamat'];

        $post->save();

        Alert::success('Berhasil', 'Profil Berhasil Diupdate!');

        return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
