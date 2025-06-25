@extends('layouts.mainadmin')

@section('title')
    Upload Foto Profil
@endsection

@section('konten')
<form action="/profile/{{ $detail->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')


    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Form Upload Foto Diri
                </center>
              </div>
            <div class="card-body">



                <div class="form-group col-xl-12">
                    <label for="foto" class="form-label">Upload Foto Diri</label><label for="" style="color: red">*</label>
                    <input type="file" class="form-control" id="foto" name="foto"  >
                @error('foto')
                <div class="alert alert-danger">Foto Tidak Boleh Kosong</div>
                @enderror
                </div>
            
                <div class="form-group col-xl-6 col-lg-8" style="display: none">
                    {{-- <label for="nama" class="form-label">Nama</label> --}}
                    @if ($detail->nama === null)
                      <input type="text" class="form-control" id="nama" name="nama"  value=" " placeholder="masukan nama" >  
                    @else
                      <input type="text" class="form-control" id="nama" name="nama"  value="{{ $detail->nama }}" placeholder="masukan nama" >
                    @endif
                    
                  </div>
              
                  <div class="form-group col-xl-6 col-lg-8" style="display: none">
                      {{-- <label for="nik" class="form-label">NIK</label> --}}
                      @if ($detail->nik === null)
                          <input type="text" class="form-control" id="nik" name="nik" value=" " placeholder="masukan nik" >  
                          
                      @else
                          <input type="text" class="form-control" id="nik" name="nik" value="{{ $detail->nik }}" placeholder="masukan nik" >
                      @endif
                      
                  </div>
            
                  <div class="form-group col-xl-6 col-lg-8" style="display: none">
                    <label for="tempat" class="form-label">Tempat lahir</label>
                    @if ($detail->tempat === null)
                        <input type="text" class="form-control" id="tempat" name="tempat" value=" " placeholder="masukan tempat lahir" >  
                        
                    @else
                        <input type="text" class="form-control" id="tempat" name="tempat" value="{{ $detail->tempat }}" placeholder="masukan tempat lahir" >
                    @endif
                    
                </div>
              
                  <div class="form-group col-xl-6 col-lg-8" style="display: none">
                      {{-- <label for="ttl" class="form-label">Tanggal Lahir</label> --}}
                      @if ($detail->ttl === null)
                          <input type="date" class="form-control" id="ttl" name="ttl" value=" "> 
                      @else
                          <input type="date" class="form-control" id="ttl" name="ttl" value="{{ $detail->ttl }}">
                      @endif
                      
                  </div>
              
              
                  <div class="form-group col-xl-6 col-lg-8" style="display: none">
                      {{-- <label for="gender" class="form-label">Jenis Kelamin</label> --}}
                      <select name="gender" id="gender" class="form-control" >
                          @if ($detail->gender === null)
                                  <option value="" selected></option>
                                  <option value="pria">Pria</option>
                                  <option value="wanita">Wanita</option>
                          @else
                              <option value="{{ $detail->gender }}" selected>{{ $detail->gender }}</option>
                              <option value="pria">Pria</option>
                              <option value="wanita">Wanita</option>
                          @endif
                          
                          
                      </select>
                  </div>
            
            
                  <div class="form-group col-xl-6 col-lg-8" style="display: none">
                    <label for="warga" class="form-label">Warganegara</label>
                    @if ($detail->warga === null)
                        <input type="text" class="form-control" id="warga" name="warga" value="" placeholder="masukan warganegara" >  
                        
                    @else
                        <input type="text" class="form-control" id="warga" name="warga" value="{{ $detail->warga }}" placeholder="masukan wargabegara" >
                    @endif
                    
                </div>
            
                <div class="form-group col-xl-6 col-lg-8" style="display: none">
                    <label for="agama" class="form-label">Agama</label>
                    <select name="agama" id="agama" class="form-control" >
                        @if ($detail->agama === null)
                        <option value="" selected></option>
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kongkhucu">Kongkhucu</option>
                        @else
                        <option value="{{ $detail->agama }}" selected>{{ $detail->agama }}</option>
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kongkhucu">Kongkhucu</option>
                        
                        @endif
                          
                        
                    </select>
                </div>
            
            
                  <div class="form-group col-xl-6 col-lg-8" style="display: none">
                    <label for="pekerjaan" class="form-label">pekerjaan</label>
                    @if ($detail->pekerjaan === null)
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value=" " placeholder="masukan pekerjaan" >  
                        
                    @else
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $detail->pekerjaan }}" placeholder="masukan pekerjaan" >
                    @endif
                    
                </div>
            
                <div class="form-group col-xl-6 col-lg-8" style="display: none">
                    <label for="nikah" class="form-label">Status Nikah</label>
                    <select name="nikah" id="nikah" class="form-control" >
                        @if ($detail->nikah === null)
                        <option value="" selected></option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                            
                        @else
            
                        <option value="{{ $detail->nikah }}" selected>{{ $detail->nikah }}</option>
                        
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                            
                        @endif
                           
                        
                    </select>
                </div>
              
                  <div class="form-group col-xl-6 col-lg-8" style="display: none">
                      {{-- <label for="nohp" class="form-label">Telepon</label> --}}
                      @if ($detail->hohp === null)
                          <input type="number" class="form-control" id="nohp" name="nohp" value="{{ $detail->nohp }}">  
                          
                      @else
                          <input type="number" class="form-control" id="nohp" name="nohp" value="{{ $detail->nohp }}">
                      @endif
                      
                  </div>
              
                  <div class="form-group col-xl-6 col-lg-8" style="display: none">
                      {{-- <label for="alamat" class="form-label">Alamat</label> --}}
                      @if ($detail->alamat === null)
                      <textarea name="alamat" id="alamat" class="form-control" placeholder="masukan alamat"> </textarea>
              
                      @else
                      <textarea name="alamat" id="alamat" class="form-control" placeholder="masukan alamat">{{ $detail->alamat }}</textarea>
                      @endif
                      
                  </div>
              
                  {{-- <div class="form-group col-xl-6 col-lg-8">
                      
                      
                      <input type="file" class="form-control" id="foto" name="foto" value="{{ $detail->foto }}" style="display: none">
                  </div> --}}
    



                

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