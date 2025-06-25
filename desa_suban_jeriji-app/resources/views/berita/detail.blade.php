@extends('beranda')


@section('content')
    <h1> {{ $berita->title}} </h1>
    <img src="../images_content/{{ $berita->thumbnail }}" alt="{{ $berita->thumbnail }}" width="500">
    <p> {{ $berita->content }} </p><br>
    
    <a href="/beranda/berita" >
        <button type="button" class="btn btn-primary mb-3">Kembali</button>
      </a>
@endsection