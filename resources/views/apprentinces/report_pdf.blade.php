<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa/Mahasiswa Magang</title>

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
    <h5 class="text-center">Laporan Data Siswa / Mahasiswa Magang</h5>
    <br>
    <table class="table table-bordered" style="max-width: 50%">
        <thead class="text-center">
            <tr>
                <th>No.</th>
                <th>Nama Siswa/Mahasiswa</th>
                <th>Nisn/Nim</th>
                <th>divisi</th>
                <th>Sub Divisi</th>
                <th>Unit</th>
                <th>Sub Unit</th>
                <th>Asal Instansi</th>
                <th>Tanggal Mulai Magang</th>
                <th>Tanggal Selesai Magang</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @php
                $i = 1;
            @endphp
            @forelse ($data as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->nisn_nim }}</td>
                    @if (!empty($item->division_id))
                        <td>{{ $item['division']['name'] }}</td>
                        <td>{{ $item['division']['section_division']['name'] }}</td>
                    @else
                        <td>-</td>
                        <td>-</td>
                    @endif

                    @if (!empty($item->unit_id))
                        <td>{{ $item['unit']['name'] }}</td>
                        <td>{{ $item['unit']['section_unit']['name'] }}</td>
                    @else
                        <td>-</td>
                        <td>-</td>
                    @endif
                    <td>{{ $item->school }}</td>
                    <td>{{ $item->date_start }}</td>
                    <td>{{ $item->date_end }}</td>
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
