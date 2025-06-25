@extends('layouts.mainadmin')



@section('konten')

<form action="/pengaduanmasyarakat" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Form Perngaduan
                </center>
              </div>
            <div class="card-body">

                <div class="form-group col-xl-12">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto"  >
                </div>
                @error('foto')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            
                  <div class="form-group col-xl-12">
                      <label for="judul">Judul</label>
                      <input type="text" class="form-control" name="judul" id="judul"  placeholder="Masukan Judul">
                  </div>
                  @error('judul')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  
                  <div class="form-group col-xl-12">
                      <label for="konten">Konten Pengaduan</label>
                      <textarea class="form-control" id="konten" name="konten" rows="3"></textarea>
                  </div>
                  @error('konten')
                  <div class="alert alert-danger">{{ $message }}</div>
              
                  @enderror
            
                  <div class="form-group col-xl-12" style="display: none">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="status" id="status"  value="pengecekan">
                </div>
            
            
                  <div class="form-group col-xl-12" style="display: none">
                   
                    <input type="number" class="form-control" name="profile_id" id="profile_id"  value="{{ $profile }}">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>



                




                <center>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </center>
              
            </div>
            <div class="card-footer">
                <p><i>~* Wajib diisi <br>
                      ~Isikan nama dengan nama lengkap</i></p>
                <p><i></i></p>
              </div>
        </div>
        
    </div>

    
     
      
      
      
</form>


@endsection