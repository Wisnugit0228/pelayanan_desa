@extends('beranda')



@section('content')

<form action="/lihatsuratdomisili/{{ $domisili->id }}" method="POST" enctype="multipart/form-data">
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

      


    <div class="form-group col-xl-6 col-lg-8" style="display: none">
        <input type="text" class="form-control" name="profile_id" id="profile_id" value="{{ $domisili->profile_id }}" >
    </div>

    <div class="form-group col-xl-6 col-lg-8" style="display: none">
        <input type="text" class="form-control" name="status" id="status" value="pengecekan" >
    </div>

    <div class="form-group col-xl-6 col-lg-8" style="display: none">
        <input type="text" class="form-control" name="jenis" id="jenis" value="surat keterangan domisili" >
    </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      
      
</form>


@endsection