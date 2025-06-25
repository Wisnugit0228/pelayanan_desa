@extends('layouts.mainadmin')

@section('title')
    Detail Data Pengaduan
@endsection

@section('konten')

<div class="container">
    <h3 style="text-align: center">Detail Pengaduan</h3>

<div class="row">
    <div class="col-lg-3">
        <img src="/images_pengaduan/{{ $data->foto }}" class="img-thumbnail" alt="...">
    </div>
    <div class="col-lg-9">
        <table class="table table-bordered">
            <tr>
                <th width="200">Nama</th>
                <td>{{ $data->profile->nama }}</td>
            </tr>
            <tr>
                <th width="200">NIK</th>
                <td>{{ $data->profile->nik }}</td>
            </tr>
            <tr>
                <th width="200">Judul Pengaduan</th>
                <td>{{ $data->judul }}</td>
            </tr>
            <tr>
                <th width="200">Konten Pengaduan</th>
                <td>{{ $data->konten }}</td>
            </tr>
           
          </table>
    </div>
</div>



    

      <form action="/pengaduanadmin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
    
          <div class="form-group col-xl-6 col-lg-8" >
              
              <input type="text" class="form-control" name="status" id="status" value="sukses" style="display: none">
              {{-- <label for="">Terima:</label> --}}
          </div>
        

        <div class="form-group col-xl-6 col-lg-8">
            
            <input type="text" class="form-control" name="note" id="note"  value="Pengaduan Anda Telah Kami Terima, Terima Kasih!" style="display: none">

            <button type="submit" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                  </svg>
                Setuju
            </button>
        </div>

          
          
          
    </form>

    <form action="/pengaduanadmin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
    
          <div class="form-group col-xl-6 col-lg-8" >
              
              <input type="text" class="form-control" name="status" id="status" value="gagal" style="display: none">
              {{-- <label for="">Tolak:</label> --}}
          </div>


          <div class="form-group col-xl-6 col-lg-8">
            <button type="submit" class="btn btn-danger">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </i>  
                Tolak</button>
                <br>
            <label for="note" class="form-label">Catatan</label>
            
            <textarea name="note" id="note" class="form-control"  placeholder="masukan pesan"></textarea>
            @error('note')
            <div class="alert alert-danger">Catatan Tidak Boleh Kosong</div>
            @enderror
          
            
        </div>
        <div class="form-group col-xl-6 col-lg-8">
       
           
          
          
          
    </form>
@endsection