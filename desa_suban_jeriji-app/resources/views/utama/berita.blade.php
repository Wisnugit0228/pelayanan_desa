@extends('beranda')

@section('content')



  @forelse ($berita as $brt)

  <div class="card">
    {{-- check box --}}
   
    <div class="card-body">
      <div class="row">
        <div class="container">
          <img src="../images_content/{{ $brt->thumbnail }}" class="img-fluid" alt="...">
        </div>

        <div class="col-9">
          <h3>{{ $brt->title }}</h3>
          <p class="berita">{{ $brt->content }}</p>
          <a href="/berita/detail/{{ $brt->id }}" class="btn btn-primary">Selengkapnya</a>
            
          
        </div>
        
      </div>
    </div>
  </div>




        
 

    
    
    
      
    
@empty
    
@endforelse



@endsection