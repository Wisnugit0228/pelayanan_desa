@extends('layouts.mainadmin')

@section('title')
    Profile
@endsection

@section('konten')

@if ($detail->nama === null && $detail->nik === null)

<div class="card">
    <div class="card-body">
        <h1 style="text-align: center">Silahkan Lengkapi Data Anda</h1>
    </div>
    <a class="btn btn-primary" href="/profile/edit">Lengkapi Data</a>
</div>
    
@else


<section style="background-color: #eee;">
    
  
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-3">
          <div class="card-body text-center">
            @if ($detail->foto === null or $detail->foto === 'kosong')
              <h3>Silahkan Upload Foto</h3>
                <div class="d-flex justify-content-center mb-2">
                  <a href="/profile/editpp" class="btn btn-primary">Upload Foto Profil</a> 
              
                </div>
            @else
              <img src="/fotoprofile/{{ $detail->foto }}" alt="avatar" class="rounded-circle img-fluid cropped">
            @endif
              <br><br>
            @if ($detail->foto === null or $detail->foto === "kosong")
                
            @else
              @if ($detail->ktp->status === 'sukses' or $detail->ktp->status === 'pengecekan')
                
              @else
                <a href="/profile/editpp" class="btn btn-primary">Ubah Foto Profil</a> 
              @endif
            @endif
            
            
            
            
            
           
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nama</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $detail->nama }}</p>
                
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">NIK</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $detail->nik }}</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tempat, Tanggal Lahir</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $detail->tempat }}, {{ $detail->ttl }}</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Jenis Kelamin</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $detail->gender }}</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Pekerjaan</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $detail->pekerjaan }}</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Status Penikahan</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $detail->nikah }}</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Warganegara/Agama</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $detail->warga }}/{{ $detail->agama }}</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telepon</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $detail->nohp }}</p>
              </div>
            </div>
            <hr>

            

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Alamat</p>
              </div>
              <div class="col-sm-9">
                
                <p class="text-muted mb-0">{{ $detail->alamat }}</p>
              </div>
            </div>
            <hr>
            
          </div>
          @if ($detail->ktp->status === 'sukses' or $detail->ktp->status === 'pengecekan')
              
          @else
          <a href="/profile/edit" class="btn btn-warning mb-3">Edit Profile</a>
          @endif
          
        </div>
        
        
      </div>
    </div>
  </div>

      @if ( $detail->ktp->status === null )

        <div class="card">
          <div class="card-body">
            <h1 class="text-danger" style="text-align: center">Silahkan Upload Foto KTP</h1>
          </div>
            <a class="btn btn-primary" href="ktp/{{ $detail->ktp->id }}/edit">Lengkapi Data</a>
        </div>

    
      @else

        @if ($detail->ktp->status === 'pengecekan')

        <div class="card">
          <div class="card-body">
            <h1 class="text-warning" style="text-align: center">KTP dalam pengecekan</h1>
          </div>
            {{-- <a class="btn btn-primary" href="ktp/{{ $detail->ktp->id }}/edit">Lengkapi Data</a> --}}
        </div>
            
        @else

          @if ($detail->ktp->status === 'sukses')
          
          <div class="card">
            <div class="card-body">
              <h1 class="text-success" style="text-align: center">Verifikasi Ktp berhasil</h1>
              <div class="row justify-content-center">
                <div class="col-lg-4"> 
                  <center>
                    <input type="button" class="btn btn-primary" onclick="tend()" value="Lihat">
                    <input type="button" class="btn btn-primary" onclick="tn()" value="Tutup"><br>
                    <img src="/ktp/{{ $detail->ktp->ktp }}" id="ktp" class="img-thumbnail" alt="..." style="display: none">
                    
                  </center>
                  
                </div>
              </div>

             
             
            </div>
              {{-- <a class="btn btn-primary" href="ktp/{{ $detail->ktp->id }}/edit">Lengkapi Data</a> --}}
          </div>
            
          @else

            @if ($detail->ktp->status === 'gagal')
            <div class="card">
              <div class="card-body">
                <h1 class="text-danger" style="text-align: center">Verifikasi Ktp gagal</h1>
                <p> Catatan : {{ $detail->ktp->note }}</p>
              </div>
                <a class="btn btn-primary" href="ktp/{{ $detail->ktp->id }}/edit">Upload Ulang</a>
            </div>
            @else
                
            @endif
            
          @endif
            
        @endif

    
      @endif


 @endif



</section>

    






@endsection

