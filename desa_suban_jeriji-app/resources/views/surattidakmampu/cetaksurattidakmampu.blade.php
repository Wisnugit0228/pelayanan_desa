
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
                        <font size="4"><b><u>SURAT KETERANGAN TIDAK MAMPU</u></b></font><br>
                        <font size="2">Nomor: {{ $tidak->nomor }}</font>
        
                    </center>
                </td>
            </tr>
            
        </table>

        <table border="0" width="19.5cm">
            <tr>
                <td>
                    <p>Yang bertanda tangan dibawah ini Kepada Desa Suban Jeriji, Kecamatan Rambang Niru, Kabupaten 
                        Muara Enim menerangkan dengan sebenarnya, bahwa:
                    </p>
                </td>
            </tr>
        </table>
        <table border="0" width="19.5cm">
            <tr>
                <td>Nama</td>
                <td width="400">: {{ $tidak->nama }}</td>
            </tr>
            <tr>
                <td>Nik</td>
                <td width="400">: {{ $tidak->nik }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td width="400">: {{ $tidak->gender }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td width="400">: {{ $tidak->tempat }}, {{ $tidak->ttl }}</td>
            </tr>
            <tr>
                <td>Warganegara/Agama</td>
                <td width="400">: {{ $tidak->warga }}/{{ $tidak->agama }}<td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td width="400">: {{ $tidak->kerja }}</td>
            </tr>
            <tr>
                <td>Status Pernikahan</td>
                <td width="400">: {{ $tidak->nikah }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td width="400">: {{ $tidak->alamat }}</td>
            </tr>
            
        </table>
        
        <table border="0" width="19.5cm">
            <tr>
                <td>
                    <p>Nama tersebut diatas adalah benar warga Desa Suban Jeriji, Kecamatan Rambang Niru, 
                        Kabupaten Muara Enim. Berdasarkan keterangan yang ada pada kami benar bahwa yang 
                        bersangkutan tergolong keluarga yang tidak mampu. <br>
                        Demikian surat keterangan ini dibuat atas perhatian dan kerjasamanya kami ucapkan terima kasih.
                    </p>
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

   <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
