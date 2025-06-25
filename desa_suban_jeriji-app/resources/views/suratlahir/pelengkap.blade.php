@extends('layouts.mainadmin')

@section('title')
    Data Orang Tua
@endsection

@section('konten')






<form action="/pelengkapsuratkelahiran" method="POST" enctype="multipart/form-data">
    @csrf
    @method('GET')


    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Form Data Orang Tua
                </center>
              </div>
            <div class="card-body">

                <div class="form-group col-xl-12">
                    <label for="namaayah">Nama Ayah</label><label for="" style="color: red">*</label>
                    <input type="text" class="form-control" name="namaayah" id="namaayah"  placeholder="masukan nama ayah">
                    @error('namaayah')
                    <div class="alert alert-danger">Nama Ayah Tidak Boleh Kosong</div>
                    @enderror
                </div>
            
            
                <div class="form-group col-xl-12">
                    <label for="namaibu">Nama Ibu</label><label for="" style="color: red">*</label>
                    <input type="text" class="form-control" name="namaibu" id="namaibu"  placeholder="masukan nama ibu">
                    @error('namaibu')
                    <div class="alert alert-danger">Nama Ibu Tidak Boleh Kosong</div>
                    @enderror
                </div>

                <div class="form-group col-xl-12">
                    <label for="foto" class="form-label">Upload KTP Ibu/Ayah</label><label for="" style="color: red">*</label>
                    <input type="file" class="form-control" id="foto" name="foto"  >
                    @error('foto')
                    <div class="alert alert-danger">Foto KTP Tidak Boleh Kosong</div>
                    @enderror
                </div>
                
                
                
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" name="surat_id" id="surat_id" value="{{ $lahir->id }}" >
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