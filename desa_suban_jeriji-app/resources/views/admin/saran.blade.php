@extends('layouts.mainadmin')

@section('title')
    
    <center>
        <h3>Saran dan Masukan</h3>
    </center>
   
@endsection

@section('konten')
<table class="table table-striped table-borderd">
    <thead class="bg-info">
      <tr>
       
        <th scope="col">Nama</th>
        <th scope="col">Saran dan Masukan</th>
        
        


        
       
      </tr>
    </thead>
    <tbody>
      @forelse ($saran as $item)
      <tr>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->konten }}</td>
      </tr>
    @empty
        
    
          
      @endforelse
    </tbody>
  </table>
@endsection