<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Surat;
use Alert;

class SuratdomisiliadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $max = Surat::get()->where('jenis', 'surat keterangan domisili')->where('status', 'sukses')->last();
        $domisili = Surat::get()->where('id', $id)->first();
        // $category = Ktp::get();

        return view('admin.detailpermintaansuratdomisili', ['domisili'=>$domisili], ['max'=>$max]);
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
            'no' => 'required',
            'status' => 'required',
            'note'=> 'required',
            'nomor'=> 'required'
            
        ]);

        $suratdomisili = Surat::find($id);

        $suratdomisili->status = $request['status'];
        $suratdomisili->no = $request['no'];
        $suratdomisili->note = $request['note'];
        $suratdomisili->nomor = $request['nomor'];
        
        $suratdomisili->save();

        $data = Surat::get()->where('id', $id)->first();
        

        \Mail::raw('Permintaan Surat Anda '. $data->status, function ($message) use($data) {
          
            $message->to($data->profile->user->email, $data->nama);
            $message->subject('Permintaan Surat');
            
        });
        Alert::success('Berhasil', 'Admin Berhasil Konfirmasi!');

        

        return redirect('permintaansuratadmin');
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
