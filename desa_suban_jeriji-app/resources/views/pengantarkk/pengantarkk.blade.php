@extends('layouts.mainadmin')


@section('title')
    Daftar Surat Pengantar KK
@endsection

@section('konten')


@if ($mypost=$mypost)

<div>
  <a href="/lihatsuratpengantarkk/create" >
    <button type="button" class="btn mb-3" style="background-color: orange">
    
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg>
      Minta Surat
    
    </button>
  </a>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Nama</th>
      <th scope="col">Tempat, Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Jenis Surat</th>
      <th scope="col">Aksi</th>


      
    </tr>
  </thead>
  <tbody>
    @forelse ($kk as $no => $item)
    <tr>
        
        <td>{{ $item->nama }}</td>
        <td>{{ $item->tempat }}, {{ $item->ttl }}</td>
        <td>{{ $item->gender }}</td>
        <td>{{ $item->jenis }}</td>
        <td >

          @if ($item->status === "pengecekan")
           <p class="text-warning">Sedang dalam pengecekan</p>
              
          @else
            @if ($item->status === "gagal")
              <p class="text-danger">Permintaan surat ditolak</p>
              <a href="/lihatsuratpengantarkk/{{ $item->id }}/edit" class="btn btn-sm" style="background-color: orange">Ulangi</a>
            @else
              <a href="/cetaksuratpengantarkk/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg>    
                </i>      
            </button></a> 
            @endif
          
          @endif

          
        </td>
        
        
    </tr>
        
    @empty
    <tr>
        
    </tr>
        
    @endforelse
  </tbody>
</table>
@if ($item->status === ("gagal"))
    <div class="container fluid">
      <p class="text-warning">Note : {{ $item->note }}</p>
    </div>
@else
    
@endif
    
@else
<div class="card">
  <div class="card-body">
      <h6 style="text-align: center">Belum Ada Permintaan Surat</h6>
      <a href="/lihatsuratpengantarkk/create" >
        <button type="button" class="btn mb-3" style="background-color: orange">
        
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
          Minta Surat
        
        </button>
      </a>
      
  </div>
</div>

@endif


    
@endsection