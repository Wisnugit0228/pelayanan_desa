
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
                        <font size="4"><b><u>SURAT KETERANGAN USAHA</u></b></font><br>
                        <font size="2">Nomor: {{ $suratusaha->nomor }}</font>
        
                    </center>
                </td>
            </tr>
            
        </table>

        <table border="0" width="19.5cm">
            <tr>
                <td>
                    <p>Yang bertanda tangan di bawah ini Kepala Desa Suban Jeriji, Kecamatan Rambang Niru  Menerangkan dengan sebenarnya, bahwa:</p>
                </td>
            </tr>
        </table>
        <table border="0" width="19.5cm">
            <tr>
                <td>Nama</td>
                <td width="400">: {{ $suratusaha->nama }}</td>
            </tr>
            <tr>
                <td>Nik</td>
                <td width="400">: {{ $suratusaha->nik }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td width="400">: {{ $suratusaha->gender }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td width="400">: {{ $suratusaha->tempat }}, {{ $suratusaha->ttl }}</td>
            </tr>
            <tr>
                <td>Warganegara/Agama</td>
                <td width="400">: {{ $suratusaha->warga }}/{{ $suratusaha->agama }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td width="400">: {{ $suratusaha->kerja }} </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td width="400">: {{ $suratusaha->alamat }}</td>
            </tr>
            
        </table>
        <table border="0" width="19.5cm">
            <tr>
                <td>
                    <p>Sesuai dengan keterangan yang bersangkutan benar nama tersebut di atas mempunyai usaha sebagai berikut:</p>
                </td>
            </tr>
        </table>
        <table border="0" width="19.5cm">
            <tr>
                <td>Nama Usaha</td>
                <td width="400">: {{ $suratusaha->dokumen->namausaha }}</td>
            </tr>
            <tr>
                <td>Jenis Usaha</td>
                <td width="400">: {{ $suratusaha->dokumen->jenisusaha }}</td>
            </tr>
            <tr>
                <td>Mulai Usaha Sejak</td>
                <td width="400">: {{ $suratusaha->dokumen->mulaiusaha }}</td>
            </tr>
            <tr>
                <td>Alamat Usaha</td>
                <td width="400">: {{ $suratusaha->dokumen->alamatusaha }}</td>
            </tr>
        </table>
        <table border="0" width="19.5cm">
            <tr>
                <td>
                    <p>Demikian surat tersebut dibuat untuk dipergunakan sebagaimana mestinya</p>
                </td>
            </tr>
        </table>
        <br><br>
        <table border="0" width="19.5cm">
            <tr>
                <td width="12cm"></td>
                <td>
                    <center>
                        <p>Kepala Desa Suban Jeriji</p>
                        <img src="data:image/png;base64,{{ $qrcode }}">
                        <p>Ditandatangani secara elektronik</p>
                    </center>

                </td>
                
            </tr>
        </table>
    </center>


   
    
</body>
</html>
