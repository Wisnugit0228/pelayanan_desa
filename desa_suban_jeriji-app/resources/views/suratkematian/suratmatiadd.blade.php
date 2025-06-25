@extends('layouts.mainadmin')

@section('title')
    Form Permintaan Surat Keterangan Kematian
@endsection


@section('konten')

<form action="/lihatsuratmati" method="POST" enctype="multipart/form-data">
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
                    Form Permintaan Surat Keterangan Kematian
                </center>
              </div>
            <div class="card-body">

                <div class="form-group col-xl-12">
                    <label for="nama">Nama</label><label for="" style="color: red">*</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" name="nama" id="nama"  placeholder="masukan nama">
                    @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="nik">NIK</label><label for="" style="color: red">*</label>
                    <input type="number" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}"  name="nik" id="nik"  placeholder="masukan nik" min="16">
                    @error('nik')
                    <div class="alert alert-danger">{{ $message }}</div>
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
                <div class="alert alert-danger">{{ $message }}</div>
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
                    <label for="ttl" class="form-label">Tanggal Kematian</label><label for="" style="color: red">*</label>
                        <input type="date" class="form-control" id="ttl" name="ttl" max="{{ $mytime->format('Y-m-d') }}" value=""> 
                    @error('ttl')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                
            
            
                
                
            
                <div class="form-group col-xl-12">
                    <label for="alamat">Alamat</label><label for="" style="color: red">*</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="masukan alamat"></textarea>
                    @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            
                @enderror
                </div>
            
                
                
            
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" name="tempat" id="tempat" value="null" >
                </div>
            
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" name="profile_id" id="profile_id" value="{{ $profile }}" >
                </div>
            
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" name="status" id="status" value="pengecekan" >
                </div>
            
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" name="jenis" id="jenis" value="surat keterangan kematian" >
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