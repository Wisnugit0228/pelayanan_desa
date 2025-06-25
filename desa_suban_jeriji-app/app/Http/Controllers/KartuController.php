<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ktp;
use File;
use Alert;

class KartuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ktp = Ktp::get()->where('status', 'pengecekan');
        
       
        return view('admin.verifikasi', ['ktp'=>$ktp]);  
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ktp = Ktp::get()->where('id', $id)->first();

        return view('admin.detail', ['ktp'=>$ktp]);
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
        $request->validate([
            'status' => 'required',
            'ktp' => 'image|mimes:jpg,png,jpeg',
            'note'=> 'required'
            
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
        // if($request->file('ktp')){
        //     $request['ktp'] = $request->file('ktp')->store('ktp-gambar');
        // }

        $ktp->status = $request['status'];
        $ktp->note = $request['note'];
        
        $ktp->save();
        $data = Ktp::get()->where('id', $id)->first();
        

        \Mail::raw('Verifikasi KTP Anda '. $data->status, function ($message) use($data) {
          
            $message->to($data->profile->user->email, $data->profile->nama);
            $message->subject('Verifikasi KTP');
            
        });

        Alert::success('Berhasil', 'Admin Berhasil Konfirmasi!');

        return redirect('kartu');
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
