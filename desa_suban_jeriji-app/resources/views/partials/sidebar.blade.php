
<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: orange">
    <!-- Brand Logo -->
    <span  class="brand-link">
      <img src="{{ ('/images/logos.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SUBAN JERIJI</span>
    </span>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      @guest
          
      @endguest
      @auth
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/fotoprofile/{{ Auth::user()->profile->foto }}" class="cropped1 rounded-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="/profile" class="d-block">{{ Auth::user()->profile->nama }}</a>
        </div>
      </div>
          
      @endauth
      

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          @auth

          <li class="nav-item">
            <a href="/berandauser" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                  <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                  <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                </svg>
              </i>
              <p>
                Beranda
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/surat/daftarsurat" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-arrow-down" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99V4Zm1 7.105 4.708-2.897L1 5.383v5.722ZM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1Z"/>
                  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-1.646a.5.5 0 0 1-.722-.016l-1.149-1.25a.5.5 0 1 1 .737-.676l.28.305V11a.5.5 0 0 1 1 0v1.793l.396-.397a.5.5 0 0 1 .708.708l-1.25 1.25Z"/>
                </svg>
              </i>
              <p>
                Surat
              </p>
            </a>
          </li>

         

          


          <li class="nav-item">
            <a href="/pengaduanmasyarakat" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-lg" viewBox="0 0 16 16">
                  <path d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"/>
                </svg>
              </i>
              <p>
                Pengaduan
              </p>
            </a>
          </li>
              
          
         

          
              
          @endauth
          
          

          @can('admin')
          <hr style="color: white">

          <li class="nav-item">
            <a  class="nav-link">
              <i class="nav-icon"></i>
             <h3>Menu Admin</h3>
            </a>
          </li>

          <li class="nav-item">
            <a href="/berandaadmin" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
              </i>
              <p>
                Beranda Admin
              </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="/berita" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                </svg>
              </i>
              <p>
                Kelolah Berita
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/kartu" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-check" viewBox="0 0 16 16">
                  <path d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                  <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                </svg>
              </i>
              <p>
                @php
                    // use Illuminate\Support\Facades\DB;
                    $notifktp = DB::table('uploadktp')->get()->where('status', 'pengecekan')->count();
                @endphp
                @if ($notifktp > 0)
                  Verifikasi KTP <span class="right badge badge-danger">{{ $notifktp }}</span>
                @else
                  Verifikasi KTP
                @endif
                

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/pengaduanadmin" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                  <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                </svg>
              </i>
              <p>
                @php
                    // use Illuminate\Support\Facades\DB;
                    $pengaduan = DB::table('pengaduan')->get()->where('status', 'pengecekan')->count();
                @endphp
                @if ($pengaduan > 0)
                  Pengaduan Masyarakat <span class="right badge badge-danger">{{ $pengaduan }}</span>
                @else
                  Pengaduan Masyarakat
                @endif
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/permintaansuratadmin" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                </svg>
              </i>
              <p>
                @php
                // use Illuminate\Support\Facades\DB;
                $notifsurat = DB::table('surat')->get()->where('status', 'pengecekan')->count();
                @endphp
                @if ($notifsurat > 0)
                  Permintaan Surat <span class="right badge badge-danger"> {{ $notifsurat }}</span>
                @else
                  Permintaan Surat
                @endif
                
              </p>
            </a>
          </li>

          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                </svg>
              </i>
              <p>
                Permintaan Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/permintaansuratusahaadmin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Usaha</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/permintaansuratdomisiliadmin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/permintaansurattidakmampuadmin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Tidak Mampu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/permintaansuratlahiradmin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/permintaansuratmatiadmin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Kematian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/permintaansuratpengantarktpadmin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Pengantar KTP</p>
                </a>
              </li>
              
            </ul>
          </li> --}}


          <li class="nav-item">
            <a href="/semuasuratkeluar" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                </svg>
              </i>
              <p>
                Surat Keluar
              </p>
            </a>
          </li>

          


          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                </svg>
              </i>
              <p>
                Surat Keluar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/suratusahakeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Usaha</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/suratdomisilikeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/surattidakmampukeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Tidak Mampu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/suratlahirkeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Kelahiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/suratmatikeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Kematian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/suratpengantarktpkeluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Pengantar KTP</p>
                </a>
              </li>
            </ul>
          </li> --}}

          {{-- <li class="nav-item">
            <a href="/permintaansuratusahaadmin" class="nav-link">
              <i class="nav-icon"></i>
              <p>
                Permintaan Surat
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="/riwayatpengaduan" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                  <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                </svg>
              </i>
              <p>
                Riwayat Pengaduan
              </p>
            </a>
          </li>
              
          @endcan

          @can('kepala')

          <li class="nav-item">
            <a href="/permintaansuratadmin" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                </svg>
              </i>
              <p>
                @php
                // use Illuminate\Support\Facades\DB;
                $notifsurat = DB::table('surat')->get()->where('status', 'pengecekan')->count();
                @endphp
                @if ($notifsurat > 0)
                  Permintaan Surat <span class="right badge badge-danger"> {{ $notifsurat }}</span>
                @else
                  Permintaan Surat
                @endif
                
              </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="/semuasuratkeluar" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                </svg>
              </i>
              <p>
                Surat Keluar
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="/pengaduanadmin" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                  <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                </svg>
              </i>
              <p>
                @php
                    // use Illuminate\Support\Facades\DB;
                    $pengaduan = DB::table('pengaduan')->get()->where('status', 'pengecekan')->count();
                @endphp
                @if ($pengaduan > 0)
                  Pengaduan Masyarakat <span class="right badge badge-danger">{{ $pengaduan }}</span>
                @else
                  Pengaduan Masyarakat
                @endif
              </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="/riwayatpengaduan" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                  <path d="m9.708 6.075-3.024.379-.108.502.595.108c.387.093.464.232.38.619l-.975 4.577c-.255 1.183.14 1.74 1.067 1.74.72 0 1.554-.332 1.933-.789l.116-.549c-.263.232-.65.325-.905.325-.363 0-.494-.255-.402-.704l1.323-6.208Zm.091-2.755a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0Z"/>
                </svg>
              </i>
              <p>
                Riwayat Pengaduan
              </p>
            </a>
          </li>
              
          
              
          @endcan

          @if ( Auth::user()->name === 'IsAdmin' )
          <li class="nav-item">
            <a href="/saran" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                  <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                  <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2"/>
                </svg>
              </i>
              <p>
                Saran
              </p>
            </a>
          </li>
          @endif

          

          


          @guest

          <li class="nav-item">
            <a href="/login" class="nav-link">
              <i class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
              </i>
              <p>
                Login
              </p>
            </a>
          </li>
              
          @endguest




          
            
            
          


         


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    </aside>