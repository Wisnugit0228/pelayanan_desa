
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
        <table border="0" width="19.5cm">
            <tr>
                {{-- <td><img src="/images/logo_surat.png" alt="" width="100" height="100"></td> --}}
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

        <table border="0" width="19.5cm">
            <tr>
                <td>
                    <center>
                        <font size="4"><b><u>SURAT KETERANGAN KELAHIRAN</u></b></font><br>
                        <font size="2">Nomor: {{ $lahir->nomor }}</font>
        
                    </center>
                </td>
            </tr>
            
        </table>

        <table border="0" width="19.5cm">
            <tr>
                <td>
                    <p>Yang bertanda tangan di bawah ini Kepala Desa Suban Jeriji, Kecamatan Rambang Niru  Menerangkan dengan sebenarnya, bahwa telah lahir seorang anak:</p>
                </td>
            </tr>
        </table>
        <table border="0" width="19.5cm">
            <tr>
                <td>Nama</td>
                <td width="400">: {{ $lahir->nama }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td width="400">: {{ $lahir->gender }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td width="400">: {{ $lahir->tempat }}, {{ $lahir->ttl }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td width="400">: {{ $lahir->agama }}</td>
            </tr>
          
            <tr>
                <td>Alamat</td>
                <td width="400">: {{ $lahir->alamat }}</td>
            </tr>
            
        </table>
        <table border="0" width="19.5cm">
            <tr>
                <td>
                    <p>Anak tersebut diatas adalah anak dari:</p>
                </td>
            </tr>
        </table>
        <table border="0" width="19.cm">
            <tr>
                <td>Nama Ayah</td>
                <td width="400">: {{ $lahir->dokumen->namaayah }}</td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td width="400">: {{ $lahir->dokumen->namaibu }}</td>
            </tr>
            
        </table>
        <table border="0" width="19cm">
            <tr>
                <td>
                    <p>Demikian surat tersebut dibuat untuk dipergunakan sebagaimana mestinya</p>
                </td>
            </tr>
        </table>
        <br><br><br>
        <table border="0" width="19.cm">
            <tr>
                <td width="12cm"></td>
                <td>
                    {{-- SUBAN JERIJI, {{ $lahir->created_at->format('D M Y') }} <br> --}}
                    
                    <center>
                        <p>Kepala Desa Suban Jeriji</p>
                        <img src="data:image/png;base64,{{ $qrcode }}">
                        <p>Ditandatangani secara elektronik</p>
                    </center>
                    
                    
                    {{-- <img src="/images/ttd.png" alt="" width="120"><br> --}}
                    
                    

                </td>
                
            </tr>
        </table>
    </center>

   <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
