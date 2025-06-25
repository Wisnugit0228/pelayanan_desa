<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode; 

use App\Models\Surat;
use File;
// use PDF;
use Alert;

class SuratController extends Controller
{
    public function daftarsurat()
    {
        return view('surat.daftarsurat');
    }

    public function cetaksuratusaha($id)
    {

        $suratusaha = Surat::get()->where('id', $id)->first();
        $code = ", tertanda kepala desa : Extanius Walanerin, A.Md.T";
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Nama : '.$suratusaha->nama. ', Jenis surat : '. $suratusaha->jenis. ', waktu verifikasi : '. $suratusaha->created_at. $code));
        $pdf = PDF::loadView('surat.cetaksuratusaha', compact('suratusaha', 'qrcode'));
        // $pdf->setOption('isRemoteEnabled', TRUE);
        $pdf->setPaper('F4', 'potrait');
        return $pdf->stream('suratusaha-'.$suratusaha->nama.'.pdf');

    }

    public function cetaksuratdomisili($id)
    {
        $domisili = Surat::get()->where('id', $id)->first();
        $code = ", tertanda kepala desa : Extanius Walanerin, A.Md.T";
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Nama : '.$domisili->nama. ', Jenis surat : '. $domisili->jenis. ', waktu verifikasi : '. $domisili->created_at. $code));
        $pdf = PDF::loadView('suratdomisili.cetaksuratdomisili', compact('domisili', 'qrcode'));
        // $pdf->setOption('isRemoteEnabled', TRUE);
        $pdf->setPaper('F4', 'potrait');
        return $pdf->stream('suratdomisili-'.$domisili->nama.'.pdf');
        
    }


    public function cetaksurattidakmampu($id)
    {

        $tidak = Surat::get()->where('id', $id)->first();
        $code = ", tertanda kepala desa : Extanius Walanerin, A.Md.T";
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Nama : '.$tidak->nama. ', Jenis surat : '. $tidak->jenis. ', waktu verifikasi : '. $tidak->created_at. $code));
        $pdf = PDF::loadView('surattidakmampu.cetaksurattidakmampu', compact('tidak', 'qrcode'));
        // $pdf->setOption('isRemoteEnabled', TRUE);
        $pdf->setPaper('F4', 'potrait');
        return $pdf->stream('suratketerangantidakmampu-'.$tidak->nama.'.pdf');

      
    }

    public function cetaksuratlahir($id)
    {
        
        $lahir = Surat::get()->where('id', $id)->first();
        $code = ", tertanda kepala desa : Extanius Walanerin, A.Md.T";
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Nama : '.$lahir->nama. ', Jenis surat : '. $lahir->jenis. ', waktu verifikasi : '. $lahir->created_at. $code));
        $pdf = PDF::loadView('suratlahir.cetaksuratlahir', compact('lahir', 'qrcode'));
        // $pdf->setOption('isRemoteEnabled', TRUE);
        $pdf->setPaper('F4', 'potrait');
        return $pdf->stream('suratketeranganlahir-'.$lahir->nama.'.pdf');
        // $lahir = Surat::get()->where('id', $id)->first();
        // return view('suratlahir.cetaksuratlahir', ['lahir'=>$lahir]);
    }

    public function cetaksuratkematian($id)
    {
        $mati = Surat::get()->where('id', $id)->first();
        $code = ", tertanda kepala desa : Extanius Walanerin, A.Md.T";
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Nama : '.$mati->nama. ', Jenis surat : '. $mati->jenis. ', waktu verifikasi : '. $mati->created_at. $code));
        $pdf = PDF::loadView('suratkematian.cetaksuratkematian', compact('mati', 'qrcode'));
        // $pdf->setOption('isRemoteEnabled', TRUE);
        $pdf->setPaper('F4', 'potrait');
        return $pdf->stream('suratketerangankematian'.$mati->nama.'.pdf');
        // $mati = Surat::get()->where('id', $id)->first();
        // return view('suratkematian.cetaksuratkematian', ['mati'=>$mati]);
    }

    public function cetaksuratpengantarktp($id)
    {
        $ktp = Surat::get()->where('id', $id)->first();
        $code = ", tertanda kepala desa : Extanius Walanerin, A.Md.T";
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Nama : '.$ktp->nama. ', Jenis surat : '. $ktp->jenis. ', waktu verifikasi : '. $ktp->created_at. $code));
        $pdf = PDF::loadView('pengantarktp.cetaksuratpengantarktp', compact('ktp', 'qrcode'));
        // $pdf->setOption('isRemoteEnabled', TRUE);
        $pdf->setPaper('F4', 'potrait');
        return $pdf->stream('suratpengantarktp-'.$ktp->nama.'.pdf');
        // $ktp = Surat::get()->where('id', $id)->first();
        // return view('pengantarktp.cetaksuratpengantarktp', ['ktp'=>$ktp]);
    }

    public function cetaksuratpengantarkk($id)
    {
        $kk = Surat::get()->where('id', $id)->first();
        $code = ", tertanda kepala desa : Extanius Walanerin, A.Md.T";
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Nama : '.$kk->nama. ', Jenis surat : '. $kk->jenis. ', waktu verifikasi : '. $kk->created_at. $code));
        $pdf = PDF::loadView('pengantarkk.cetaksuratpengantarkk', compact('kk', 'qrcode'));
        // $pdf->setOption('isRemoteEnabled', TRUE);
        $pdf->setPaper('F4', 'potrait');
        return $pdf->stream('suratpengantarnikah-'.$kk->nama.'.pdf');
        
    }

    public function cetaksuratnikah($id)
    {
        $nikah = Surat::get()->where('id', $id)->first();
        $code = ", tertanda kepala desa : Extanius Walanerin, A.Md.T";
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Nama : '.$nikah->nama. ', Jenis surat : '. $nikah->jenis. ', waktu verifikasi : '. $nikah->created_at. $code));
        $pdf = PDF::loadView('statusnikah.cetaksuratstatusnikah', compact('nikah', 'qrcode'));
        // $pdf->setOption('isRemoteEnabled', TRUE);
        $pdf->setPaper('F4', 'potrait');
        return $pdf->stream('suratketerangan'.$nikah->nama.'.pdf');
        // $nikah = Surat::get()->where('id', $id)->first();
        // return view('statusnikah.cetaksuratstatusnikah', ['nikah'=>$nikah]);
    }

    public function cetaksuratrekomendasi($id)
    {
        $data = Surat::get()->where('id', $id)->first();
        $code = ", tertanda kepala desa : Extanius Walanerin, A.Md.T";
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate('Nama : '.$data->nama. ', Jenis surat : '. $data->jenis. ', waktu verifikasi : '. $data->created_at. $code));
        $pdf = PDF::loadView('rekomendasi.cetaksuratrekomendasi', compact('data', 'qrcode'));
        // $pdf->setOption('isRemoteEnabled', TRUE);
        $pdf->setPaper('F4', 'potrait');
        return $pdf->stream('suratrekomendasi'.$data->nama.'.pdf');
        // $nikah = Surat::get()->where('id', $id)->first();
        // return view('statusnikah.cetaksuratstatusnikah', ['nikah'=>$nikah]);
    }
}
