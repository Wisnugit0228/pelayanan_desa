@extends('layouts.mainadmin')

@section('Edit Berita')
    
@endsection

@section('konten')
<form action="/berita/{{ $berita->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group col-xl-6 col-lg-8">
        <div class="img-content col-sm-6">
            <img src="/../images_content/{{ $berita->thumbnail }}" class="img-fluid" alt="...">
        </div>
        <label for="thumbnail" class="form-label">Thumbnail</label>
        <input type="file" class="form-control" id="thumbnail" name="thumbnail"  >
    </div>

      <div class="form-group col-xl-6 col-lg-8">
          <label for="title">Judul</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ $berita->title }}">
      </div>
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      
      <div class="form-group col-xl-6 col-lg-8">
          <label for="content">Konten</label>
          <textarea class="form-control" id="content" name="content" rows="3">{{ $berita->content }}</textarea>
          
      </div>
      @error('content')
      <div class="alert alert-danger">{{ $message }}</div>
  
      @enderror

     
     
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
      
      
</form>
@endsection