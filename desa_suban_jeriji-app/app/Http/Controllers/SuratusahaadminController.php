<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Surat;
use File;
use Alert;

class SuratusahaadminController extends Controller
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
        $max = Surat::get()->where('jenis', 'surat keterangan usaha')->where('status', 'sukses')->last();
        $suratusaha = Surat::get()->where('jenis', 'surat keterangan usaha')->where('id', $id)->first();
        // $category = Ktp::get();

        return view('admin.detailpermintaansuratusaha', ['suratusaha'=>$suratusaha], ['max'=>$max]);

        
        // $profile = Auth::user()->profile->id; 
        // return view ('post.create', ['category'=>$category], ['profile'=>$profile]);
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

        $suratusaha = Surat::find($id);

        $suratusaha->status = $request['status'];
        $suratusaha->no = $request['no'];
        $suratusaha->note = $request['note'];
        $suratusaha->nomor = $request['nomor'];
        
        $suratusaha->save();

        $data = Surat::get()->where('id', $id)->first();
        

        \Mail::raw('Permintaan Surat Anda '. $data->status, function ($message) use($data) {
          
            $message->to($data->profile->user->email, $data->nama);
            $message->subject('Permintaan Surat');
            
        });
        Alert::success('Berhasil', 'Admin Berhasil Konfirmasi!');

        return redirect('permintaansuratadmin');




        // $request->validate([
        //     'foto' => 'required|image|mimes:jpg,png,jpeg',
        //     'jenis' => 'required',
        //     'nama'=> 'required',
        //     'nik'=> 'required',
        //     'gender'=> 'required',
        //     'lahir'=> 'required',
        //     'ttl'=> 'required',
        //     'warga'=> 'required',
        //     'agama'=> 'required',
        //     'alamat'=> 'required',
        //     'namausaha'=> 'required',
        //     'jenisusaha'=> 'required',
        //     'mulai'=> 'required',
        //     'alamatusaha'=> 'required',
        //     'status'=> 'required',
        //     'profile_id'=> 'required'
        // ]);

        // $suratusaha = Suratusaha::find($id);
        // if ($request->has('foto')) {
        //     $patch = 'suratusaha/';
        //     File::delete($patch.$suratusaha->foto);

        //     $fileName = time().'.'.$request->foto->extension();
        //     $request->foto->move(public_path('suratusaha'), $fileName);

        //     $suratusaha->foto = $fileName;


        //     $suratusaha->save();

        // }
        // $suratusaha->jenis = $request['jenis'];
        // $suratusaha->nama = $request['nama'];
        // $suratusaha->nik = $request['nik'];
        // $suratusaha->gender = $request['gender'];
        // $suratusaha->lahir = $request['lahir'];
        // $suratusaha->ttl = $request['ttl'];
        // $suratusaha->warga = $request['warga'];
        // $suratusaha->agama = $request['agama'];
        // $suratusaha->alamat = $request['alamat'];
        // $suratusaha->namausaha = $request['namausaha'];
        // $suratusaha->jenisusaha = $request['jenisusaha'];
        // $suratusaha->mulai = $request['mulai'];
        // $suratusaha->alamatusaha = $request['alamatusaha'];
        // $suratusaha->status = $request['status'];
        // $suratusaha->profile_id = $request['profile_id'];

        
        // $suratusaha->save();

        // return redirect('permintaansuratusaha');
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
