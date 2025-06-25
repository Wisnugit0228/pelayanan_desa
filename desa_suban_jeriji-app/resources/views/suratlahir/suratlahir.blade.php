@extends('layouts.mainadmin')

@section('title')
    Daftar Surat Keterangan Kelahiran
@endsection

@section('konten')


@if ($mypost=$mypost)

<div>
  <a href="/lihatsuratlahir/create" >
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
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tempat, Tanggal Lahir</th>
      <th scope="col">Jenis Surat</th>
      <th scope="col">Aksi</th>


      
    </tr>
  </thead>
  <tbody>
    @forelse ($lahir as $no => $item)
    <tr>
        
        <td>{{ $item->nama }}</td>
        <td>{{ $item->gender }}</td>
        <td>{{ $item->tempat }}, {{ $item->ttl }}</td>
        <td>{{ $item->jenis }}</td>
        <td >

          @if ($item->status === "pengecekan")
           <p class="text-warning">Sedang dalam pengecekan</p>
              
          @else
            @if ($item->status === "gagal")
              <p class="text-danger">Permintaan surat ditolak</p>
              <a href="/lihatsuratlahir/{{ $item->id }}/edit" class="btn btn-sm" style="background-color: orange">Ulangi</a>
            @else
              <a href="/cetaksuratlahir/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg>  
                </i>      
            </button></a> 
            @endif
          
          @endif

          
        </td>
        
        
    </tr>
        
    @empty
    <tr>
        <td>-</td>
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
      <a href="/lihatsuratlahir/create" >
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