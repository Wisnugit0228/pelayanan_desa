@extends('beranda')

@section('content')


<div class="container-fluid">

  <div class="card">
    <div class="row">
      <div class="card-body col-11">
        @if ($ktp === 0)
        <h5><b>Permintaan Verifikasi KTP : </b> <b style="color: green">{{ $ktp }}</b></h5>
        @else
        <h5><b>Permintaan Verifikasi KTP : </b> <b style="color: red">{{ $ktp }}</b></h5>
        @endif
      </div>
      <div class="card-body col-1">
          <a href="/kartu" class="btn btn-sm" style="background-color: orange">Lihat</a>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="row">
      <div class="card-body col-11">
        @if ($su === 0)
        <h5><b>Permintaan Verifikasi Surat Keterangan Usaha : </b> <b style="color: green">{{ $su }}</b></h5>
        @else
        <h5><b>Permintaan Verifikasi Surat Keterangan Usaha : </b> <b style="color: red">{{ $su }}</b></h5>
        @endif
      </div>
      <div class="card-body col-1">
          <a href="/permintaansuratusahaadmin" class="btn btn-sm" style="background-color: orange">Lihat</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="row">
      <div class="card-body col-11">
        @if ($do === 0)
        <h5><b>Permintaan Verifikasi Surat Keterangan Domisli : </b> <b style="color: green">{{ $do }}</b></h5>
        @else
        <h5><b>Permintaan Verifikasi Surat Keterangan Domisili : </b> <b style="color: red">{{ $do }}</b></h5>
        @endif
      </div>
      <div class="card-body col-1">
          <a href="/permintaansuratdomisiliadmin" class="btn btn-sm" style="background-color: orange">Lihat</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="row">
      <div class="card-body col-11">
        @if ($tidak === 0)
        <h5><b>Permintaan Verifikasi Surat Keterangan Tidak Mampu : </b> <b style="color: green">{{ $tidak }}</b></h5>
        @else
        <h5><b>Permintaan Verifikasi Surat Keterangan Tidak Mampu : </b> <b style="color: red">{{ $tidak }}</b></h5>
        @endif
      </div>
      <div class="card-body col-1">
          <a href="/permintaansurattidakmampuadmin" class="btn btn-sm" style="background-color: orange">Lihat</a>
      </div>
    </div>
  </div>

    

   
</div>
<div class="container-fluid">
  <table border="1">
    <tr>
      <td>
        <div id="myPlot" style="width:100%;max-width:700px"></div>
      </td>
    </tr>
  </table>
</div>



<br>


<script>
  const xArray = ["Pengguna Akun", "Pengguna Akun Dengan KTP Terverifikasi", "Surat Keterangan Usaha", "Surat keterangan Domisili", "Surat Keterangan Tidak Mampu"];
  const yArray = [{{ $user }}, {{ $ktpsukses }}, {{ $usaha }}, {{ $domisili }}, {{ $tidakmampu }}];
  
  const layout = {title:"Persentasi Pengguna Akun dan Surat Keluar"};
  
  const data = [{labels:xArray, values:yArray, type:"pie"}];
  
  Plotly.newPlot("myPlot", data, layout);
  </script>


@endsection