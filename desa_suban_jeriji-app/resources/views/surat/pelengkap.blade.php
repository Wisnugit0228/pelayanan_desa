@extends('layouts.mainadmin')

@section('title')
    Data Usaha
@endsection

@section('konten')








<form action="/pelengkapsuratusaha" method="POST" enctype="multipart/form-data">
    @csrf
    @method('GET')


    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Form Data Usaha
                </center>
              </div>
            <div class="card-body">


                <div class="form-group col-xl-12">
                    <label for="foto" class="form-label">Foto Usaha</label>
                    <input type="file" class="form-control" id="foto" name="foto"  >
                    @error('foto')
                    <div class="alert alert-danger">Foto Usaha Tidak Boleh Kosong</div>
                    @enderror
                </div>
                
                
                  <div class="form-group col-xl-12">
                    <label for="namausaha">Nama Usaha</label>
                    <input type="text" class="form-control" name="namausaha" id="namausaha"  placeholder="masukan nama usaha">
                    @error('namausaha')
                    <div class="alert alert-danger">Nama Usaha Tidak Boleh Kosong</div>
                    @enderror
                </div>
                
                
                <div class="form-group col-xl-12">
                    <label for="jenisusaha">Jenis Usaha</label>
                    <input type="text" class="form-control" name="jenisusaha" id="jenisusaha"  placeholder="masukan jenis usaha">
                    @error('jenisusaha')
                <div class="alert alert-danger">Jenis Usaha Tidak Boleh Kosong</div>
                @enderror
                </div>
                
                
                <div class="form-group col-xl-12">
                    <label for="mulai" class="form-label">Mulai Usaha</label>
                        <input type="month" class="form-control" id="mulaiusaha" name="mulaiusaha"> 
                @error('mulai')
                <div class="alert alert-danger">Mulai Usaha Tidak Boleh Kosong</div>
                @enderror
                    
                </div>
                
                <div class="form-group col-xl-12">
                    <label for="alamatusaha">Alamat Usaha</label>
                    <textarea class="form-control" id="alamatusaha" name="alamatusaha" rows="3" placeholder="masukan alamat usaha"></textarea>
                    @error('alamatusaha')
                <div class="alert alert-danger">Alamat Usaha Tidak Boleh Kosong</div>
                
                @enderror
                </div>
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" name="surat_id" id="surat_id" value="{{ $usaha->id }}" >
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