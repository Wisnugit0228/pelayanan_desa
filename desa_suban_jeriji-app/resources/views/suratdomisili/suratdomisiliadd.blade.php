@extends('layouts.mainadmin')

@section('title')
    Form Permintaan Surat Keterangan Domisili
@endsection



@section('konten')

<form action="/lihatsuratdomisili" method="POST" enctype="multipart/form-data">
    @csrf



    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Form Permintaan Surat Keterangan Domisili
                </center>
              </div>
            <div class="card-body">

                <div class="form-group col-xl-12">
                    <label for="nama">KTP</label>
                    
                            <div class="col-lg-4"> 
                                <input type="button" class="btn btn-primary btn-sm" onclick="tend()" value="Lihat">
                                <input type="button" class="btn btn-primary btn-sm" onclick="tn()" value="Tutup"><br>
                                <img src="/ktp/{{ $data->ktp->ktp }}" id="ktp" class="img-thumbnail" alt="..." style="display: none">
                              
                            </div>
            
                   
                </div>



                <div class="form-group col-xl-12">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control"  id="nama" value="{{ $data->nama }}"  placeholder="masukan nama" disabled>
                   
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="nik">NIK</label>
                    <input type="number" class="form-control"  id="nik" value="{{ $data->nik }}"  placeholder="masukan nik" disabled>
                   
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select  id="gender" class="form-control" disabled>
                                <option value="{{ $data->gender }}" selected>{{ $data->gender }}</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                        
                        
                    </select>
                    
                </div>
               
            
                <div class="form-group col-xl-12">
                    <label for="tempat">Tempat Lahir</label>
                    <input type="text" class="form-control"  id="tempat" value="{{ $data->tempat }}" placeholder="masukan Tempat Lahir" disabled>
                   
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="ttl" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="ttl"  value="{{ $data->ttl }}" disabled> 
                  
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="warga" class="form-label">Warganegara</label>
                    <select  id="warga" class="form-control" disabled>
                                <option value="{{ $data->warga }}" selected>{{ $data->warga }}</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                        
                        
                    </select>
                    
                </div>
            
            
                <div class="form-group col-xl-12">
                    <label for="agama" class="form-label">Agama</label>
                    <select  id="agama" class="form-control" disabled>
                        <option value="{{ $data->agama }}" selected>{{ $data->agama }}</option>
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kongkhucu">Kongkhucu</option>
                          
                    </select>
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="kerja">Perkerjaan</label>
                    <input type="text" class="form-control"  id="kerja" value="{{ $data->pekerjaan }}"  placeholder="masukan kerja" disabled>
                   
                </div>
            
                <div class="form-group col-xl-12">
                    <label for="nikah" class="form-label">Status Nikah</label>
                    <select  id="nikah" class="form-control" disabled>
                        
                        <option value="{{ $data->nikah }}" selected>{{ $data->nikah }}</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    
                    
                      
                           
                    </select>
                </div>
                
            
                <div class="form-group col-xl-12">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat"  rows="3" placeholder="masukan alamat" disabled>{{ $data->alamat }}</textarea>
                   
                </div>
            
                
                
            
            
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control"  id="profile_id" value="{{ $profile }}" >
                </div>
            
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control"  id="status" value="pengecekan" >
                </div>
            
                <div class="form-group col-xl-12" style="display: none">
                    <input type="text" class="form-control" id="jenis" value="surat keterangan domisili" >
                </div>


                <div style="display: none">
                    
                    <div class="form-group col-xl-6 col-lg-8">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}"  placeholder="masukan nama">
                        @error('nama')
                        <div class="alert alert-danger">Nama Tidak Boleh Kosong</div>
                        @enderror
                    </div>
                
                    <div class="form-group col-xl-6 col-lg-8">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" name="nik" id="nik" value="{{ $data->nik }}"  placeholder="masukan nik">
                        @error('nik')
                        <div class="alert alert-danger">NIK Tidak Boleh Kosong</div>
                        @enderror
                    </div>
                
                    <div class="form-group col-xl-6 col-lg-8">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-control">
                                    <option value="{{ $data->gender }}" selected>{{ $data->gender }}</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                            
                            
                        </select>
                        
                    </div>
                   
                
                    <div class="form-group col-xl-6 col-lg-8">
                        <label for="tempat">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat" id="tempat" value="{{ $data->tempat }}" placeholder="masukan Tempat Lahir">
                        @error('tempat')
                    <div class="alert alert-danger">Tempat Lahir Tidak Boleh Kosong</div>
                    @enderror
                    </div>
                
                    <div class="form-group col-xl-6 col-lg-8">
                        <label for="ttl" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="ttl" name="ttl" value="{{ $data->ttl }}"> 
                        @error('ttl')
                        <div class="alert alert-danger">Belum Memilih tanggal</div>
                        @enderror
                    </div>
                
                    <div class="form-group col-xl-6 col-lg-8">
                        <label for="warga" class="form-label">Warganegara</label>
                        <select name="warga" id="warga" class="form-control">
                                    <option value="{{ $data->warga }}" selected>{{ $data->warga }}</option>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                            
                            
                        </select>
                        
                    </div>
                
                
                    <div class="form-group col-xl-6 col-lg-8">
                        <label for="agama" class="form-label">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="{{ $data->agama }}" selected>{{ $data->agama }}</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kongkhucu">Kongkhucu</option>
                              
                        </select>
                    </div>
                
                    <div class="form-group col-xl-6 col-lg-8">
                        <label for="kerja">Perkerjaan</label>
                        <input type="text" class="form-control" name="kerja" id="kerja" value="{{ $data->pekerjaan }}"  placeholder="masukan kerja">
                        @error('kerja')
                        <div class="alert alert-danger">Perkerja Tidak Boleh Kosong</div>
                        @enderror
                    </div>
                
                    <div class="form-group col-xl-6 col-lg-8">
                        <label for="nikah" class="form-label">Status Nikah</label>
                        <select name="nikah" id="nikah" class="form-control">
                            
                            <option value="{{ $data->nikah }}" selected>{{ $data->nikah }}</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                            <option value="Cerai Hidup">Cerai Hidup</option>
                            <option value="Cerai Mati">Cerai Mati</option>
                        
                        
                          
                               
                        </select>
                    </div>
                    
                
                    <div class="form-group col-xl-6 col-lg-8">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="masukan alamat">{{ $data->alamat }}</textarea>
                        @error('alamat')
                    <div class="alert alert-danger">Alamat Usaha Tidak Boleh Kosong</div>
                
                    @enderror
                    </div>
                
                    
                    
                
                
                    <div class="form-group col-xl-6 col-lg-8" style="display: none">
                        <input type="text" class="form-control" name="profile_id" id="profile_id" value="{{ $profile }}" >
                    </div>
                
                    <div class="form-group col-xl-6 col-lg-8" style="display: none">
                        <input type="text" class="form-control" name="status" id="status" value="pengecekan" >
                    </div>
                
                    <div class="form-group col-xl-6 col-lg-8" style="display: none">
                        <input type="text" class="form-control" name="jenis" id="jenis" value="surat keterangan domisili" >
                    </div>

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