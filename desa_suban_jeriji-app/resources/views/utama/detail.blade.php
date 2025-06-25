@extends('beranda')


@section('content')
<div class="container">

  <center>\
    <h1> {{ $berita->title}} </h1>
  </center>
      
      <img src="/images_content/{{ $berita->thumbnail }}" class="img-fluid" alt="{{ $berita->thumbnail }}"> <br> <br>
      <p> {{ $berita->content }} </p><br>
      
      

</div>

@endsection