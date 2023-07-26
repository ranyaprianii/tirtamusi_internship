<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penilaian Sertifikat Siswa/Mahasiswa Magang</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <table>
        <tr>
            <th rowspan="4" width="250px">
                <center><img src="mazer-admin/assets/images/tirtamusi.png" alt="TirtaMusi" width="150px"></center>
            </th>
            <th>
                <<h4 class="text-center">PERUSAHAAN UMUM DAERAH</h4>
            </th>
        </tr>

        <tr>

            <th>
                <h4 class="text-center">TIRTA MUSI PALEMBANG</h4>
            </th>
        </tr>

        <tr>

            <th>
                <<h6 class="text-center">Komplek Rambutan Ujung Telp. (0711) 350079 – 354734 –
                    355089 – 350090</h6>
            </th>
        </tr>

        <tr>

            <th>
                <h6 class="text-center"> Fax. (0711) 355180 website : www.tirtamusi.com, e-mail :
                    pdam.palembang@tirtamusi.com</h6>
            </th>
        </tr>
    </table>

    <hr><br>
    <h5 class="text-center">Penilaian Sertifikat Siswa / Mahasiswa Magang</h5>
    <br>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>No.</th>
                <th>Nama Siswa/Mahasiswa</th>
                <th>Jumlah Nilai</th>
                <th>Rata-rata</th>
                <th>Predikat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @php
                $i = 1;
            @endphp
            @forelse ($data as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item['apprentince']['name'] }}</td>
                    <td>{{ $item->total_score }}</td>
                    <td>{{ $item->average_score }}</td>
                    <td>{{ $item->predicate }}</td>
                    <td>{{ $item->description }}</td>
                </tr>

            @empty
                <tr>
                    <td colspan="4" class="text-center">Data Tidak Ada</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
