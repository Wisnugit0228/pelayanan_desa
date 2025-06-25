@extends('layouts.mainadmin')

@section('title')
    Upload Dokumen
@endsection

@section('konten')






<form action="/pelengkapsuratpengantarktp" method="POST" enctype="multipart/form-data">
    @csrf
    @method('GET')


    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Upload Dokumen
                </center>
              </div>
            <div class="card-body">

                <div class="form-group col-xl-12">
                    <label for="foto" class="form-label">Upload Foto Diri</label><label for="" style="color: red">*</label>
                    <input type="file" class="form-control" id="foto" name="foto"  >
                    @error('foto')
                    <div class="alert alert-danger">Foto diri Tidak Boleh Kosong</div>
                    @enderror
                </div>


                <div class="form-group col-xl-12">
                    <label for="foto1" class="form-label">Upload Kartu Keluarga</label><label for="" style="color: red">*</label>
                    <input type="file" class="form-control" id="foto1" name="foto1"  >
                    @error('foto1')
                    <div class="alert alert-danger">Foto kk Tidak Boleh Kosong</div>
                    @enderror
                </div>

                <div class="form-group col-xl-12">
                    <label for="foto2" class="form-label">Upload Akta Kelahiran</label><label for="" style="color: red">*</label>
                    <input type="file" class="form-control" id="foto2" name="foto2"  >
                    @error('foto2')
                    <div class="alert alert-danger">Foto akta Tidak Boleh Kosong</div>
                    @enderror
                </div>
                
                
                
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" name="surat_id" id="surat_id" value="{{ $ktp->id }}" >
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