@extends('layouts.mainadmin')

@section('title')
    Daftar Surat Keterangan Usaha
@endsection

@section('konten')




@if ($mypost=$mypost)

<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Nama</th>
      <th scope="col">Nik</th>
      <th scope="col">Nama Usaha</th>
      <th scope="col">Jenis Surat</th>
      <th scope="col">Aksi</th>


      
     
    </tr>
  </thead>
  <tbody>
    @forelse ($suratusaha as $no => $item)
    <tr>
        
        <td>{{ $item->nama }}</td>
        <td>{{ $item->nik }}</td>
        <td>{{ $item->dokumen->namausaha }}</td>
        <td>{{ $item->jenis }}</td>
        <td >

          @if ($item->status === "pengecekan")
           <p class="text-warning">Sedang dalam pengecekan</p>
              
          @else
            @if ($item->status === "gagal")
              <p class="text-danger">Permintaan surat ditolak</p>
              <a href="/lihatsuratusaha/{{ $item->id }}/edit" class="btn btn-sm" style="background-color: orange">Ulangi</a>
            @else
              <a href="/cetaksuratusaha/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
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
<br>
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
      <a href="/lihatsuratusaha/create" >
        <button type="button" class="btn btn-primary mb-3">
        
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
          </svg> Minta Surat
        
        </button>
      </a>
      
  </div>
</div>
@endif

{{-- <a href="/lihatsuratusaha/create" >
    <button type="button" class="btn btn-primary mb-3">
    
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
      </svg> Berita
    
    </button>
  </a>
  
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Nik</th>
          <th scope="col">Nama Usaha</th>
          <th scope="col">Jenis Surat</th>
          <th scope="col">Aksi</th>


          
         
        </tr>
      </thead>
      <tbody>
        @forelse ($usaha as $no => $item)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->namausaha }}</td>
            <td>{{ $item->jenis }}</td>
            <td >

              @if ($item->status === "pengecekan")
               <h3 class="text-warning">Sedang dalam pengecekan</h3>
                  
              @else
                @if ($item->status === "gagal")
                  <h3 class="text-warning">Permintaan surat ditolak</h3>
                @else
                  <a href="/berita/{{ $item->id }}" ><button type="button" class="btn btn-primary btn-sm">detail</button></a> 
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
    @include('sweetalert::alert') --}}
    
@endsection