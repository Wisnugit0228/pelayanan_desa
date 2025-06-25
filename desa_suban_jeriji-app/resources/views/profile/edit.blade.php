@extends('layouts.mainadmin')

@section('title')
    Edit Profil
@endsection



@section('konten')
<form action="/profile/{{ $detail->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')




    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    Form Edit Profile
                </center>
              </div>
            <div class="card-body">



                <div class="form-group col-xl-12">
                    <label for="nama" class="form-label">Nama</label><label for="" style="color: red">*</label>
                    @if ($detail->nama === null)
                      <input type="text" class="form-control" id="nama" name="nama"  value="" placeholder="masukan nama" >  
                    @else
                      <input type="text" class="form-control" id="nama" name="nama"  value="{{ $detail->nama }}" placeholder="masukan nama" >
                    @endif
                    @error('nama')
                  <div class="alert alert-danger">{{ $message }}</div>
              
                  @enderror
                    
                  </div>
              
                  <div class="form-group col-xl-12">
                      <label for="nik" class="form-label">NIK</label><label for="" style="color: red">*</label>
                      @if ($detail->nik === null)
                          <input type="number" class="form-control" id="nik" name="nik" value="" placeholder="masukan nik" >  
                          
                      @else
                          <input type="number" class="form-control" id="nik" name="nik" value="{{ $detail->nik }}" placeholder="masukan nik" >
                      @endif
                      @error('nik')
                  <div class="alert alert-danger">{{ $message }}</div>
              
                  @enderror
                  </div>
              
                  <div class="form-group col-xl-12">
                      <label for="tempat" class="form-label">Tempat lahir</label><label for="" style="color: red">*</label>
                      @if ($detail->tempat === null)
                          <input type="text" class="form-control" id="tempat" name="tempat" value="" placeholder="masukan tempat lahir" >  
                          
                      @else
                          <input type="text" class="form-control" id="tempat" name="tempat" value="{{ $detail->tempat }}" placeholder="masukan tempat lahir" >
                      @endif
                      @error('tempat')
                  <div class="alert alert-danger">{{ $message }}</div>
              
                  @enderror
                  </div>
              
                  <div class="form-group col-xl-12">
                      <label for="ttl" class="form-label">Tanggal Lahir</label><label for="" style="color: red">*</label>
                      @if ($detail->ttl === null)
                          <input type="date" class="form-control" id="ttl" name="ttl" max="{{ $mytime->format('Y-m-d') }}" value="" > 
                      @else
                          <input type="date" class="form-control" id="ttl" name="ttl" max="{{ $mytime->format('Y-m-d') }}" value="{{ $detail->ttl }}">
                      @endif
                      @error('ttl')
                  <div class="alert alert-danger">{{ $message }}</div>
              
                  @enderror
                  </div>
              
              
                  <div class="form-group col-xl-12">
                      <label for="gender" class="form-label">Jenis Kelamin</label><label for="" style="color: red">*</label>
                      <select name="gender" id="gender" class="form-control" >
                          @if ($detail->gender === null)
                                  <option value="">--pilih jenis kelamin--</option>
                                  <option value="Pria">Pria</option>
                                  <option value="Wanita">Wanita</option>
                             
                          @else
                              <option value="{{ $detail->gender }}" selected>{{ $detail->gender }}</option>
                              <option value="Pria">Pria</option>
                              <option value="Wanita">Wanita</option>
                          @endif
                          
                          
                      </select>
                      
                  </div>
              
                  <div class="form-group col-xl-12">
                      <label for="warga" class="form-label">Warganegara</label><label for="" style="color: red">*</label>
                      <select name="warga" id="warga" class="form-control" >
                          @if ($detail->warga === null)
                          <option value="">---pilih warganegara---</option>
                          <option value="WNI">WNI</option>
                          <option value="WNA">WNA</option>
                         
                          @else
                          <option value="{{ $detail->warga }}" selected>{{ $detail->warga }}</option>
                          <option value="WNI">WNI</option>
                          <option value="WNA">WNA</option>
                          @endif
                          
                      </select>
                      @error('warga')
                  <div class="alert alert-danger">{{ $message }}</div>
              
                  @enderror
                  </div>
              
                  <div class="form-group col-xl-12">
                      <label for="agama" class="form-label">Agama</label><label for="" style="color: red">*</label>
                      <select name="agama" id="agama" class="form-control" >
                          @if ($detail->agama === null)
                          <option value="">---pilih agama---</option>
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
              
                  <div class="form-group col-xl-12">
                      <label for="pekerjaan" class="form-label">pekerjaan</label><label for="" style="color: red">*</label>
                      @if ($detail->pekerjaan === null)
                          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="" placeholder="masukan pekerjaan" >  
                          
                      @else
                          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $detail->pekerjaan }}" placeholder="masukan pekerjaan" >
                      @endif
              
                      @error('pekerjaan')
                  <div class="alert alert-danger">{{ $message }}</div>
              
                  @enderror
                      
                  </div>
              
                  <div class="form-group col-xl-12">
                      <label for="nikah" class="form-label">Status Nikah</label><label for="" style="color: red">*</label>
                      <select name="nikah" id="nikah" class="form-control" >
                          @if ($detail->nikah === null)
                          
                          <option value="">---pilih status nikah---</option>
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
              
                  <div class="form-group col-xl-12">
                      <label for="nohp" class="form-label">Telepon</label><label for="" style="color: red">*</label>
                      @if ($detail->nohp === null)
                          <input type="number" class="form-control" id="nohp" name="nohp" value="" placeholder="masukan nomor telepon">  
                          
                      @else
                          <input type="number" class="form-control" id="nohp" name="nohp" value="{{ $detail->nohp }}">
                      @endif
                      @error('nohp')
                  <div class="alert alert-danger">{{ $message }}</div>
              
                  @enderror
                  </div>
              
                  <div class="form-group col-xl-12">
                      <label for="alamat" class="form-label">Alamat</label><label for="" style="color: red">*</label>
                      @if ($detail->alamat === null)
                      <textarea name="alamat" id="alamat" class="form-control" placeholder="masukan alamat"></textarea>
              
                      @else
                      <textarea name="alamat" id="alamat" class="form-control" placeholder="masukan alamat">{{ $detail->alamat }}</textarea>
                      @endif
                      @error('alamat')
                  <div class="alert alert-danger">{{ $message }}</div>
              
                  @enderror
                  </div>
              
                  <div class="form-group col-xl-12">
                      @if ($detail->foto === null or $detail->foto === 'kosong')
                          <input type="file" class="form-control" id="foto" name="foto" value="kosong" style="display: none">
                      @else
                          <input type="file" class="form-control" id="foto" name="foto" value="{{ $detail->foto }}" style="display: none">
                      @endif
                      
                      
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



    

    

   
    
    <button type="submit" class="btn btn-primary form-group">Submit</button>
  </form>
@endsection