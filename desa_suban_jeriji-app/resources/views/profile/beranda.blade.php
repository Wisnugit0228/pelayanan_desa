@extends('layouts.mainadmin')

@section('title')
    Beranda
@endsection

@section('konten')
    
    @if (Auth::user()->name === 'IsAdmin')
    <h5>Selamat Datang Admin!</h5>
    <div class="row">
        <div class="col-lg-4">
            <div class="card bg-success" >
                <div class="card-body">
                  <h5>Permintaan Verifikasi KTP</h5>
                  <p>{{ $ktp }}</p>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card bg-warning">
                <div class="card-body">
                  <h5 style="color: white">Permintaan Surat</h5>
                  <p style="color: white">{{ $surat }}</p>
                </div>
            </div>

        </div>

        <div class="col-lg-4">
            <div class="card bg-info">
                <div class="card-body">
                  <h5>Pengaduan</h5>
                  <p>{{ $adu }}</p>
                </div>
            </div>

        </div>

        
        
    </div>
        
    @else
    <h5>Selamat Datang {{ Auth::user()->profile->nama }}</h5>

    <div class="row">
        <div class="col-lg-3">
            <div class="card bg-success" >
                <div class="card-body">
                  <h5>Surat Diterima</h5>
                  <p>{{ $surat }}</p>
                </div>
            </div>

        </div>

        <div class="col-lg-3">
            <div class="card bg-warning">
                <div class="card-body">
                  <h5 style="color: white">Surat Dalam Pengecekan</h5>
                  <p style="color: white">{{ $cek }}</p>
                </div>
            </div>

        </div>

        <div class="col-lg-3">
            <div class="card bg-info">
                <div class="card-body">
                  <h5>Pengaduan Diterima</h5>
                  <p>{{ $adu }}</p>
                </div>
            </div>

        </div>

        <div class="col-lg-3">
            <div class="card bg-primary">
                <div class="card-body">
                  <h5>Pengaduan Diperiksa</h5>
                  <p>{{ $cekadu }}</p>
                </div>
            </div>

        </div>
        
    </div>
        
    @endif
    
@endsection