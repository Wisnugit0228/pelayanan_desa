@extends('layouts.mainadmin')

@section('title')
    Form Permintaan Surat Keterangan Janda/Duda
@endsection


@section('konten')

<form action="/lihatsuratstatusnikah" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Upload KTP
                </center>
              </div>
            <div class="card-body">



               
                <div class="form-group col-xl-12">
                    <label for="nama">Nama</label><label for="" style="color: red">*</label>
                    <input type="text" class="form-control" name="nama" id="nama"  placeholder="masukan nama">
                    @error('nama')
                    <div class="alert alert-danger">Nama Tidak Boleh Kosong</div>
                    @enderror
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="nik">NIK</label><label for="" style="color: red">*</label>
                    <input type="number" class="form-control" name="nik" id="nik"  placeholder="masukan nik">
                    @error('nik')
                    <div class="alert alert-danger">NIK Tidak Boleh Kosong</div>
                    @enderror
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="tempat">Tempat Lahir</label><label for="" style="color: red">*</label>
                    <input type="text" class="form-control" name="tempat" id="tempat"  placeholder="masukan tempat lahir">
                    @error('tempat')
                    <div class="alert alert-danger">Tempat Lahir Tidak Boleh Kosong</div>
                    @enderror
                </div>
            
            
                <div class="form-group col-xl-12">
                    <label for="ttl" class="form-label">Tanggal Lahir</label><label for="" style="color: red">*</label>
                        <input type="date" class="form-control" id="ttl" name="ttl" value=""> 
                    @error('ttl')
                    <div class="alert alert-danger">Belum Memilih tanggal</div>
                    @enderror
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="gender" class="form-label">Jenis Kelamin</label><label for="" style="color: red">*</label>
                    <select name="gender" id="gender" class="form-control" >
                                <option value="">--pilih jenis kelamin--</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                        
                        
                    </select>
                    
                </div>
               
            
                <div class="form-group col-xl-12">
                    <label for="kerja">Pekerjaan</label><label for="" style="color: red">*</label>
                    <input type="text" class="form-control" name="kerja" id="kerja"  placeholder="masukan pekerjaan">
                    @error('kerja')
                <div class="alert alert-danger">kerja Lahir Tidak Boleh Kosong</div>
                @enderror
                </div>
            
                <div class="form-group col-xl-12">
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
            
                <div class="form-group col-xl-12">
                    <label for="warga" class="form-label">Warganegara</label><label for="" style="color: red">*</label>
                    <select name="warga" id="warga" class="form-control" >
                        <option value="">---pilih warganegara---</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                          
                    </select>
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="nikah" class="form-label">Status Nikah</label><label for="" style="color: red">*</label>
                    <select name="nikah" id="nikah" class="form-control" >
                        
                        <option value="">---pilih status nikah---</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                           
                    </select>
                </div>
            
               
            
                
            
            
                
                
            
                <div class="form-group col-xl-12">
                    <label for="alamat">Alamat</label><label for="" style="color: red">*</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="masukan alamat"></textarea>
                    @error('alamat')
                <div class="alert alert-danger">Alamat Usaha Tidak Boleh Kosong</div>
            
                @enderror
                </div>
            
                
                
            
                
            
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" name="profile_id" id="profile_id" value="{{ $profile }}" >
                </div>
            
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" name="status" id="status" value="pengecekan" >
                </div>
            
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" name="jenis" id="jenis" value="surat keterangan janda/duda" >
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