@extends('layouts.mainadmin')

@section('title')
    Daftar Berita
@endsection


@section('konten')


<a href="/berita/create" >
    <button type="button" class="btn btn-primary mb-3">
    
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
      </svg> Berita
    
    </button>
  </a>
  
  <table class="table table-striped table-bordered border-primary">
      <thead class="bg-info">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Kategori</th>
          <th scope="col">Aksi</th>

          
         
        </tr>
      </thead>
      <tbody>
        @forelse ($berita as $no => $brt)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $brt->title }}</td>
            <td >
              <form action="/berita/{{ $brt->id }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/berita/{{ $brt->id }}/edit" ><button type="button" class="btn btn-warning btn-sm">edit</button></a> 
                <button type="submit" class="btn btn-danger btn-sm" id="delete" >hapus</button>
                <a href="/berita/{{ $brt->id }}" ><button type="button" class="btn btn-primary btn-sm">detail</button></a> 
              </form>
              
            </td>
            
            
        </tr>
            
        @empty
        <tr>
            <td>-</td>
        </tr>
            
        @endforelse
      </tbody>
    </table>
    {{-- @include('sweetalert::alert') --}}

@endsection