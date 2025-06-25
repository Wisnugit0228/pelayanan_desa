@extends('beranda')

@section('title')
    Detail Surat Keterangan Kelahiran
@endsection

@section('content')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Surat</title>
</head>
<body>
    <center>
        <table border="0" width="625">
            <tr>
                <td><img src="/images/logo_surat.png" alt="" width="100" height="100"></td>
                <td>
                    <center>
                        <font size="4"><b>PEMERINTAH KABUPATEN MUARA ENIM</b></font><br>
                        <font size="5"><b>KECAMATAN RAMBANG NIRU</b></font><br>
                        <font size="6"><b>DESA SUBAN JERIJI</b></font><br>
                        <font size="2">Jl.Desa Suban Jeriji - Kode Pos 31172</font><br>
                        <font size="2">website: https://desasubanjerijiapp.id - Email: desasubanjeriji@gmail.com</font>

                    </center>
                </td>
            </tr>

            <tr>
                <td colspan="2"><b><hr></b></td>
            </tr>
        </table>

        <table border="0" width="625">
            <tr>
                <td>
                    <center>
                        <font size="4"><b><u>SURAT KETERANGAN KELAHIRAN</u></b></font><br>
                        <font size="2">Nomor: {{ $lahir->nomor }}</font>
        
                    </center>
                </td>
            </tr>
            
        </table>

        <table border="0" width="625">
            <tr>
                <td>
                    <p>Yang bertanda tangan di bawah ini Kepala Desa Suban Jeriji, Kecamatan Rambang Niru  Menerangkan dengan sebenarnya, bahwa telah lahir seorang anak:</p>
                </td>
            </tr>
        </table>
        <table border="0" width="625">
            <tr>
                <td>Nama</td>
                <td width="450">: {{ $lahir->nama }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td width="450">: {{ $lahir->gender }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td width="450">: {{ $lahir->tempat }} , {{ $lahir->ttl }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td width="450">: {{ $lahir->agama }}</td>
            </tr>
          
            <tr>
                <td>Alamat</td>
                <td width="450">: {{ $lahir->alamat }}</td>
            </tr>
            
        </table>
        <table border="0" width="625">
            <tr>
                <td>
                    <p>Anak tersebut diatas adalah anak dari:</p>
                </td>
            </tr>
        </table>
        <table border="0" width="625">
            <tr>
                <td>Nama Ayah</td>
                <td width="450">: {{ $lahir->dokumen->namaayah }}</td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td width="450">: {{ $lahir->dokumen->namaibu }}</td>
            </tr>
            
        </table>
        <table border="0" width="625">
            <tr>
                <td>
                    <p>Demikian surat tersebut dibuat untuk dipergunakan sebagaimana mestinya</p>
                </td>
            </tr>
        </table>
        <br>
        <table border="0" width="625">
            <tr>
                <td width="380"></td>
                <td>
                    SUBAN JERIJI, {{ $lahir->created_at }}<br>
                    Kepala Desa Suban Jeriji <br><br>
                    <img src="/images/ttd.png" alt="" width="120"><br>
                    
                    <b><u>Kepala Desa Suban Jeriji</u></b>

                </td>
                
            </tr>
        </table>
        <a href="/cetaksuratlahir/{{ $lahir->id }}" class="btn" style="background-color: orange">
            <i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                    <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                  </svg>
            </i> 
            Cetak
        </a>
    </center>

   {{-- <script type="text/javascript">
        window.print();
    </script> --}}
</body>
</html>

@endsection