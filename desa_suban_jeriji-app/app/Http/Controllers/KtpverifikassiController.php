<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ktp;
use File;
use Alert;

class KtpverifikassiController extends Controller
{
    public function verifikasi()
    {
        

        return view('admin.verifikasiktp');
    }

    Public function index()
    {
        $ktp = Ktp::get();
        
       
        return view('admin.verifikasiktp', ['ktp'=>$ktp]);
    }

    public function detail($id)
    {
        $ktp = Ktp::get()->where('id', $id)->first();

        return view('admin.detail', ['ktp'=>$ktp]);
    }

    public function ubah(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'ktp' => 'image|mimes:jpg,png,jpeg'
            
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

        return redirect('profile');
    }
    
}
