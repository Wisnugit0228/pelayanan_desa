@extends('layouts.main')

@section('content')

<div>
    <hr>
    <center>
        <h3 id="tentang">Desa Suban Jeriji</h3>
    </center>
    <hr>
</div>

<div class="row">
    
    <div class="col-lg-6">
        <img src="/images/banner.png" class="img-thumbnail" alt="...">
    </div>
    <div class="col-lg-6">
        <center>
            <p>
                Suban Jeriji adalah sebuah desa yang berada di Kecamatan Rambang Niru Kabupaten Muara Enim Provinsi Sumatera Selatan. 
                suban Jeriji tidak berbatasan dengan laut dan berada dalam kawasan hutan. terdapat 1043 keluarga, ada kepala desa, ada 
                sekertaris desa, dan 43 aparatur pemerintahan, ada BPD/lembaga Masyarakat dengan jumlah anggota 9 orang. Musyawarah desa 
                selama tahun 2017 sebanyak 10 kegiatan. saat ini Suban Jeriji tergolong berkembang menurut index desa Desa Membangun dan 
                tergolong Berkembang menurut Indeks Pembangunan Desa
            </p>
        </center>
    </div>

    
   
</div>
<br><br><br>
<div>
    <hr>
    <center>
        <h3>Seputar Desa Suban Jeriji</h3>
    </center>
    <hr>
</div>

<div>
    
    
    <div class="row">
      


        
        <div class="col-lg-8">
            <hr>
            <center>
                <h6 id="berita">Berita</h6>
            </center>
            <hr>
            @foreach ($berita as $item)
            <div class="mt-3">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-3">
                            <img src="/images_content/{{ $item->thumbnail }}" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-lg-9">
                            <h6>{{ $item->title }}</h6>
                            <p class="berita">{{ $item->content }}</p>
                            <span>...</span> <br>
                            <a class="btn btn-outline-warning" href="">Selengkapnya></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="col-lg-4">
            <hr>
            <center>
                <h6>Pengumuman</h6>
            </center>
            <hr>
            <div class="mt-3">
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle col-lg-12" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Pembuatan Kartu BPJS
                      </button>
                      <ul class="dropdown-menu col-lg-12" aria-labelledby="dropdownMenuButton1">
                        <div class="card col-lg-12">
                            <div class="card-body">
                              Bagi warga desa yang betum mendapatkan kartu BPJS gratis silahkan datang ke Kantor desa.
                            </div>
                        </div>
                      </ul>
                    
                  </div>
                
            </div>



            <div class="mt-3">
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle col-lg-12" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Pendaftaran Anggota Desa
                      </button>
                      <ul class="dropdown-menu col-lg-12" aria-labelledby="dropdownMenuButton1">
                        <div class="card col-lg-12">
                            <div class="card-body">
                              
                                Suban Jeriji adalah sebuah desa yang berada di Kecamatan Rambang Niru Kabupaten Muara Enim 
                                Provinsi Sumatera Selatan. suban Jeriji tidak berbatasan dengan laut dan berada dalam kawasan 
                                hutan. terdapat 1043 keluarga, ada kepala desa, ada sekertaris desa, dan 43 aparatur pemerintahan, 
                                ada BPD/lembaga Masyarakat dengan jumlah anggota 9 orang. Musyawarah desa selama tahun 2017 sebanyak 
                                10 kegiatan. saat ini Suban Jeriji tergolong berkembang menurut index desa Desa Membangun dan tergolong 
                                Berkembang menurut Indeks Pembangunan Desa
                            </div>
                        </div>
                      </ul>
                    
                  </div>
                
            </div>



            <div class="mt-3">
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle col-lg-12" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Pembuatan Kartu Indonesia Pintar
                      </button>
                      <ul class="dropdown-menu col-lg-12" aria-labelledby="dropdownMenuButton1">
                        <div class="card col-lg-12">
                            <div class="card-body">
                              Akan diadakan Pendaftaran kartu Indonesia pintar pada tanggal 20-30 Desember di Kantor Desa Suban Jeriji.
                              Bagi warga yang ingin mendaftar silahkan datang langsung ke kantor Desa.
                            </div>
                        </div>
                      </ul>
                    
                  </div>
                  <br>

                <div>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/images/suban1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/images/suban2.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/images/suban3.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                
            </div>
    
           
    
            
          </div>
        
        

        
            
       

    </div>

    <br><br><br>
<div>
    <hr>
    <center>
        <h3 id="lokasi">Lokasi</h3>
    </center>
    <hr>
</div>

<div>
    <iframe class="col-lg-12" height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127396.20668061609!2d103.89274631993004!3d-3.7815630842291807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e398d8e2d2adcb7%3A0x4f2fb2f9678534a9!2sSuban%20Jeriji%2C%20Kec.%20Rambang%20Niru%2C%20Kabupaten%20Muara%20Enim%2C%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1702550923000!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<br><br><br>
<div class="col-lg-6">
    <hr>
    <center>
        <h3 id="kontak">Masukan Anda</h3>
    </center>
    <hr>
</div>
<div class="col-lg-6">
    <form action="/saran" method="POST">
      @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Alamat Email</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="maskukan" class="form-label">Saran Anda</label>
          <textarea name="konten" class="form-control" id=""></textarea>
         
        </div>
        <button type="submit" class="btn btn-primary">Kirim!</button>
      </form>
</div>

        
    
   
  
</div>


    
@endsection