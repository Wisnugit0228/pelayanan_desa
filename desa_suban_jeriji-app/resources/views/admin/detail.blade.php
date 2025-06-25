@extends('layouts.mainadmin')

@section('title')
    Detail Data Verifikasi KTP
@endsection


@section('konten')

    <div class="row">
        <div class="col-lg-4">
            <img src="/ktp/{{ $ktp->ktp }}" class="img-fluid" alt="...">
        </div>

        <div class="col-lg-8">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $ktp->profile->nama }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>{{ $ktp->profile->nik }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $ktp->profile->ttl }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $ktp->profile->gender }}</td>
                </tr>
                <tr>
                    <th>Nomo Telepon</th>
                    <td>{{ $ktp->profile->nohp }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $ktp->profile->alamat }}</td>
                </tr>
              </table>

        </div>

    </div>

    
    <div class="container">

        

    </div>
    
    {{-- <img src="../images_content/{{ $berita->thumbnail }}" alt="{{ $berita->thumbnail }}" width="500">
    <p> {{ $berita->content }} </p><br> --}}

    <form action="/kartu/{{ $ktp->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
    
        <div class="form-group container">
            
            <input type="file" class="form-control" id="ktp" name="ktp"  style="display: none">
        </div>
    
    
        <div class="form-group col-xl-6 col-lg-8">
              
            <input type="hidden" class="form-control" name="status" id="status" value="sukses" >
        </div>
        <div class="container">
            
        <div class="form-group col-xl-6 col-lg-8">
              
            <input type="hidden" class="form-control" name="note" id="note" value="sukses" >
            <button type="submit" class="btn btn-primary">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                      </svg>
                </i>
                Setuju</button>
        </div>
        </div>

    
       
          
    </form>

    <form action="/kartu/{{ $ktp->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
    
        <div class="form-group container">
            
            <input type="file" class="form-control" id="ktp" name="ktp"  style="display: none">
        </div>
    
    
        <div class="form-group col-xl-6 col-lg-8">
              
            <input type="hidden" class="form-control" name="status" id="status" value="gagal" >
        </div>

        <div class="container">
            <div class="form-group col-xl-6 col-lg-8">
                <label for="note" class="form-label">Pesan Kesalahan</label>
                
                <textarea name="note" id="note" class="form-control" placeholder="masukan pesan"></textarea>
                @error('note')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <button type="submit" class="btn btn-danger">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                    </i>
                    Tolak</button>
                
            </div>

        </div>

        
    
         
          
    </form>
    
   
@endsection