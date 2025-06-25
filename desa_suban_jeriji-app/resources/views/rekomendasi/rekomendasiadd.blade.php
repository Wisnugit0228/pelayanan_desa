@extends('layouts.mainadmin')

@section('title')
    Form Permintaan Surat Keterangan Kelahiran
@endsection



@section('konten')

<form action="/lihatsuratrekomendasi" method="POST" enctype="multipart/form-data">
    @csrf
   
      {{-- <div class="form-group col-xl-6 col-lg-8">
        <label for="foto" class="form-label">Foto Usaha</label>
        <input type="file" class="form-control" id="foto" name="foto"  >
        @error('foto')
        <div class="alert alert-danger">Foto Usaha Tidak Boleh Kosong</div>
        @enderror
    </div> --}}
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Form Permintaan Surat Rekomendasi Beasiswa
                </center>
              </div>
            <div class="card-body">

                <div class="form-group col-xl-12">
                    
                    <label for="nama">Nama</label><label for="" style="color: red">*</label>
                    <input type="text" class="form-control" name="nama" id="nama"  placeholder="masukan nama">
                    @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-xl-12">
                    
                    <label for="nik">NIK</label><label for="" style="color: red">*</label>
                    <input type="text" class="form-control" name="nik" id="nik"  placeholder="masukan nik">
                    @error('nik')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-xl-12 ">
                    <label for="gender" class="form-label">Jenis Kelamin</label><label for="" style="color: red">*</label>
                    <select name="gender" id="gender" class="form-control" >
                                <option value="">--pilih jenis kelamin--</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                        
                        
                    </select>
                    
                </div>
               
            
                <div class="form-group col-xl-12 ">
                    <label for="tempat">Tempat Lahir</label><label for="" style="color: red">*</label>
                    <input type="text" class="form-control" name="tempat" id="tempat"  placeholder="masukan Tempat Lahir">
                    @error('tempat')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            
                <div class="form-group col-xl-12 ">
                    <label for="ttl" class="form-label">Tanggal Lahir</label><label for="" style="color: red">*</label>
                        <input type="date" class="form-control" id="ttl" name="ttl" value="" max="{{ $mytime->format('Y-m-d') }}"> 
                    @error('ttl')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="form-group col-xl-12 ">
                    <label for="warga" class="form-label">Warganegara</label><label for="" style="color: red">*</label>
                    <select name="warga" id="warga" class="form-control" >
                                <option value="">--pilih jenis kelamin--</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                        
                        
                    </select>
                    
                </div>
            
            
                <div class="form-group col-xl-12 ">
                    <label for="agama" class="form-label">Agama</label><label for="" style="color: red">*</label>
                    <select name="agama" id="agama" class="form-control" >
                        <option value="">---pilih agama---</option>
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kongkhucu">Kongkhucu</option>
                          
                    </select>
                </div>
                
            
                <div class="form-group col-xl-12 ">
                    <label for="alamat">Alamat</label><label for="" style="color: red">*</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="masukan alamat"></textarea>
                    @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            
                @enderror
                </div>
            
                
                
            
            
                <div class="form-group col-xl-12 " style="display: none">
                    <input type="text" class="form-control" name="profile_id" id="profile_id" value="{{ $profile }}" >
                </div>
            
                <div class="form-group col-xl-12 " style="display: none">
                    <input type="text" class="form-control" name="status" id="status" value="pengecekan" >
                </div>
            
                <div class="form-group col-xl-12 " style="display: none">
                    <input type="text" class="form-control" name="jenis" id="jenis" value="surat rekomendasi beasiswa" >
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