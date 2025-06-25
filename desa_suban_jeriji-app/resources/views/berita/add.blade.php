@extends('layouts.mainadmin')

@section('title')
    Tambah Berita
@endsection


@section('konten')

<form action="/berita" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group col-xl-6 col-lg-8">
        <label for="thumbnail" class="form-label">Thumbnail</label>
        <input type="file" class="form-control" id="thumbnail" name="thumbnail"  >
    </div>

      <div class="form-group col-xl-6 col-lg-8">
          <label for="title">Judul</label>
          <input type="text" class="form-control" name="title" id="title"  placeholder="Masukan Judul">
      </div>
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      
      <div class="form-group col-xl-6 col-lg-8">
          <label for="content">Konten</label>
          <textarea class="form-control" id="content" name="content" rows="3"></textarea>
          
      </div>
      @error('content')
      <div class="alert alert-danger">{{ $message }}</div>
  
      @enderror

      
      <button type="submit" class="btn btn-primary">Submit</button>
      
      
</form>


@endsection