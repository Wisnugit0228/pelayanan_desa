@extends('beranda')



@section('content')

<form action="/lihatsuratusaha/{{ $suratusaha->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group col-xl-6 col-lg-8">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" value="{{ $data->nama }}" disabled>
    </div>

    <div class="form-group col-xl-6 col-lg-8">
      <label for="nik">NIK</label>
      <input type="Number" class="form-control" value="{{ $data->nik }}" disabled>
  </div>


  <div class="form-group col-xl-6 col-lg-8">
      <label for="lahir">Tempat, Tanggal Lahir</label>
      <input type="text" class="form-control" value="{{ $data->tempat }}, {{ $data->ttl }}" disabled>
  </div>



  <div class="form-group col-xl-6 col-lg-8">
      <label for="lahir">Jenis Kelamin</label>
      <input type="text" class="form-control" value="{{ $data->gender }}" disabled>
  </div>


 

  <div class="form-group col-xl-6 col-lg-8">
      <label for="warga">Warnanegara/Agama</label>
      <input type="text" class="form-control" value="{{ $data->warga }}/{{ $data->agama }}" disabled>
  </div>



  

  <div class="form-group col-xl-6 col-lg-8">
      <label for="pekerjaan">Pekerjaan</label>
      <input type="text" class="form-control" value="{{ $data->pekerjaan }}" disabled>
  </div>

    
    <div class="form-group col-xl-6 col-lg-8">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" disabled>{{ $data->alamat }}</textarea>
        
    </div>
   

    <div class="form-group col-xl-6 col-lg-8">
        <label for="foto" class="form-label">Foto Usaha</label>
        <input type="file" class="form-control" id="foto" name="foto" value="{{ $suratusaha->foto }}" >
    </div>
    @error('foto')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


      <div class="form-group col-xl-6 col-lg-8">
        <label for="namausaha">Nama Usaha</label>
        <input type="text" class="form-control" name="namausaha" id="namausaha" value="{{ $suratusaha->namausaha }}" placeholder="masukan nama usaha">
    </div>
    @error('namausaha')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group col-xl-6 col-lg-8">
        <label for="jenisusaha">Jenis Usaha</label>
        <input type="text" class="form-control" name="jenisusaha" id="jenisusaha" value="{{ $suratusaha->jenisusaha }}" placeholder="masukan jenis usaha">
    </div>
    @error('jenisusaha')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group col-xl-6 col-lg-8">
        <label for="mulai" class="form-label">Tanggal Mulai</label>
            <input type="month" class="form-control" id="mulai" name="mulai" value="{{ $suratusaha->mulai }}"> 
        
    </div>

    <div class="form-group col-xl-6 col-lg-8">
        <label for="alamatusaha">Alamat Usaha</label>
        <textarea class="form-control" id="alamatusaha" name="alamatusaha" rows="3" placeholder="masukan alamat usaha">{{ $suratusaha->alamatusaha }}</textarea>
        
    </div>
    @error('alamatusaha')
    <div class="alert alert-danger">{{ $message }}</div>

    @enderror


    <div class="form-group col-xl-6 col-lg-8" style="display: none">
        <input type="text" class="form-control" name="profile_id" id="profile_id" value="{{ $suratusaha->profile_id }}" >
    </div>

    <div class="form-group col-xl-6 col-lg-8" style="display: none">
        <input type="text" class="form-control" name="status" id="status" value="pengecekan" >
    </div>

    <div class="form-group col-xl-6 col-lg-8" style="display: none">
        <input type="text" class="form-control" name="jenis" id="jenis" value="surat keterangan usaha" >
    </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      
      
</form>


@endsection