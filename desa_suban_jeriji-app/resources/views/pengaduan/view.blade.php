@extends('layouts.mainadmin')

@section('title')
    Riwayat Pengaduan
@endsection

@section('konten')


@if ($mypost=$mypost)

<a href="/pengaduanmasyarakat/create" >
  <button type="button" class="btn btn-primary mb-3">
  
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
      <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
      <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
    </svg> Pengaduan
  
  </button>
</a>

<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Tanggal</th>
      <th scope="col">Judul</th>
      <th scope="col">Status</th>
      <th scope="col">Keterangan</th>


      
     
    </tr>
  </thead>
  <tbody>
    @forelse ($pengaduan as $no => $item)
    <tr>
        
        <td>{{ $item->created_at->format('d-m-Y') }}</td>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->status }}</td>
        <td >

          @if ($item->status === "pengecekan")
           <p class="text-warning">Sedang dalam pengecekan</p>
              
          @else
            @if ($item->status === "gagal")
              <p class="text-danger">Pengaduan ditolak</p>
            @else
            <p>{{ $item->note }}</p>
              {{-- <a href="/pengaduanmasysrakat/{{ $item->id }}" ><button type="button" class="btn btn-sm" style="background-color: orange">
                <i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                  </svg>  
                </i>  
              </button></a>  --}}
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
    
@else
@can('verifktp')

<div class="card">
  <div class="card-body">
      <h6 style="text-align: center">Belum Ada Riwayat Pengaduan</h6>
      <a href="/pengaduanmasyarakat/create" >
        <button type="button" class="btn btn-primary mb-3">
        
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
          </svg> Pengaduan
        
        </button>
      </a>
      
  </div>
</div>
    
@endcan


@can('not')
<div class="card">
  <div class="card-body">
      <h6 style="text-align: center">Belum Ada Riwayat Pengaduan</h6>
     
        <button type="button" class="btn btn mb-3" disabled style="background-color: orange">
        
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2"/>
          </svg> Pengaduan
        
        </button>
      
      
  </div>
</div>
@endcan


@endif

    
@endsection