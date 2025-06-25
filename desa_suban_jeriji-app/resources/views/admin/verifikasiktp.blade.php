@extends('layouts.mainadmin')

@section('title')
    Daftar Permintaan Verifikasi KTP
@endsection


@section('konten')



    




  
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>

          
         
        </tr>
      </thead>
      <tbody>
        @forelse ($ktp as $no => $k)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $k->profile->nama }}</td>
            <td>{{ $k->status }}</td>
            <td >
              
                <a href="/kartu/{{ $k->id }}" ><button type="button" class="btn btn-warning btn-sm">Lihat</button></a> 
                
                
              
              
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