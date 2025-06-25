@extends('layouts.mainadmin')

@section('title')
    Detail Permintaan Surat Keterangan Usaha
@endsection

@section('konten')

<h3 style="text-align: center">Data Permintaan Surat Keterangan Usaha</h3>
<div class="container">
    

    <div class="col-lg-3">
        
    </div>
    <div class="row">
        <div class="col-lg-3">
            <h6>Foto Diri:</h6>
            <img src="/fotoprofile/{{ $suratusaha->profile->foto }}" class="img-thumbnail" alt="..."><br>
            <h6>Foto KTP:</h6>
            <img src="/ktp/{{ $suratusaha->profile->ktp->ktp }}" class="img-thumbnail" alt="..."><br>
            <h6>Foto Usaha:</h6>
            <img src="/suratusaha/{{ $suratusaha->dokumen->foto }}" class="img-thumbnail" alt="...">
        </div>
        <div class="col-lg-9">
            <h6 style="visibility: hidden">data</h6>
            <table class="table table-bordered">
                <tr>
                    <th width="200">Nama</th>
                    <td>{{ $suratusaha->nama }}</td>
                </tr>
                <tr>
                    <th width="200">NIK</th>
                    <td>{{ $suratusaha->nik }}</td>
                </tr>
                <tr>
                    <th width="200">Tempat, Tanggal Lahir</th>
                    <td>{{ $suratusaha->tempat }},  {{ $suratusaha->ttl }}</td>
                </tr>
                <tr>
                    <th width="200">Jenis Kelamin</th>
                    <td>{{ $suratusaha->gender }}</td>
                </tr>
                <tr>
                    <th width="200">Warganegara/Agama</th>
                    <td>{{ $suratusaha->warga }}/{{ $suratusaha->agama }}</td>
                </tr>
                <tr>
                    <th width="200">Pekerjaan</th>
                    <td>{{ $suratusaha->kerja }}</td>
                </tr>
                <tr>
                    <th width="200">Alamat</th>
                    <td>{{ $suratusaha->alamat }}</td>
                </tr>
                <tr>
                    <th width="200">Nama Usaha</th>
                    <td>{{ $suratusaha->dokumen->namausaha }}</td>
                </tr>
                <tr>
                    <th width="200">Jenisusaha</th>
                    <td>{{ $suratusaha->dokumen->jenisusaha }}</td>
                </tr>
                <tr>
                    <th width="200">Mulai Usaha</th>
                    <td>{{ $suratusaha->dokumen->mulaiusaha }}</td>
                </tr>
                <tr>
                    <th width="200">Alamat Usaha</th>
                    <td>{{ $suratusaha->dokumen->alamatusaha }}</td>
                </tr>
              </table>

        </div>
    </div>
    
        
    
  
    

    

      <form action="/permintaansuratusahaadmin/{{ $suratusaha->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
    
          <div class="form-group col-xl-6 col-lg-8" >
              
              <input type="text" class="form-control" name="status" id="status" value="sukses" style="display: none">
              {{-- <label for="">Terima:</label> --}}
          </div>

          <div class="form-group col-xl-6 col-lg-8" style="display: none">
            <label for="no">No</label>
        
            <input type="number" class="form-control" name="no" id="no"  value="{{ ($max->no+1) }}">
           
        </div>
        @error('no')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group col-xl-6 col-lg-8" style="display: none">
            <label for="nomor">Nomor Surat</label>
            
            0<input type="text" class="form-control" name="nomor" id="nomor"  value="205/00{{ ($max->no+1) }}/SBJ/XII/2023">
           
        </div>
        @error('nomor')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        

        <div class="form-group col-xl-6 col-lg-8">
            
            <input type="text" class="form-control" name="note" id="note"  value="sukses" style="display: none">
            <button type="submit" class="btn btn-primary">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                      </svg>
                </i>
                Setuju</button>
        </div>

          
          
          
    </form>

    <form action="/permintaansuratusahaadmin/{{ $suratusaha->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
    
          <div class="form-group col-xl-6 col-lg-8" >
              
              <input type="text" class="form-control" name="status" id="status" value="gagal" style="display: none">
              {{-- <label for="">Tolak:</label> --}}
          </div>

         

          <div class="form-group col-xl-6 col-lg-8">

            <button type="submit" class="btn btn-danger">
                <i>
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                    </i>
                </i>  
                    Tolak
                </button><br>

            <label for="note" class="form-label">Catatan</label>
           
            <textarea name="note" id="note" class="form-control"  placeholder="masukan pesan"></textarea>
            @error('note')
            <div class="alert alert-danger">Catatan Tidak Boleh kosong</div>
            @enderror
          
            
        </div>
        <div class="form-group col-xl-6 col-lg-8">
            
        
            <input type="number" class="form-control" name="no" id="no"  value="0" style="display: none">

            <div class="form-group col-xl-6 col-lg-8">
            
                <input type="text" class="form-control" name="nomor" id="nomor"  value="0" style="display: none">
               
            </div>
       
           
        
          
          
    </form>
@endsection