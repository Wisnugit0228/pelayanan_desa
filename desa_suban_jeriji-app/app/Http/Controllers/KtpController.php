<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use Illuminate\Http\Request;
use File;
use Alert;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ktp = Ktp::get();
        
        // return view('berita.view', ['ktp'=>$ktp]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $ktp = Ktp::get()->where('id', $id)->first();

        // return view('admin.detail', ['ktp'=>$ktp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ktp = Ktp::find($id);

        return view('profile.addktp', ['ktp'=>$ktp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'ktp' => 'required|image|mimes:jpg,png,jpeg'
            
        ]);

        $ktp = ktp::find($id);
        if ($request->has('ktp')) {
            $patch = 'images_content/';
            File::delete($patch.$ktp->ktp);

            $fileName = time().'.'.$request->ktp->extension();
            $request->ktp->move(public_path('ktp'), $fileName);

            $ktp->ktp = $fileName;


            $ktp->save();

        }

        $ktp->status = $request['status'];
        
        $ktp->save();
        Alert::success('Berhasil', 'KTP Berhasil Diupload, Silahkan Tunggu Konfirmasi Admin!');

        return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ktp $ktp)
    {
        //
    }
}
