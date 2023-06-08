@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Data Siswa/Mahasiswa</h3>
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Data Mahasiswa</h4>
                </div>
                <a class="text-end btn btn-sm btn-outline-info" href="{{ route('apprentince.create') }}"><i
                        class="fa fa-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Nisn</th>
                            <th>Nim</th>
                            <th>Asal Kampus</th>
                            <th>Asal Jurusan</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>File Pendukung</th>
                            <th>Sertifikat Magang</th>
                            <th>Status Magang</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>
@endsection

@section('js_after')
    <script>
        $(document).ready(function() {
            getDatatable();
        });

        let data_table = "";

        function getDatatable() {
            data_table = $("#data-table").DataTable({
                ajax: {
                    url: "{{ route('apprentince.datatable') }}",
                },
                serverSide: true,
                destroy: true,
                order: [
                    [4, 'desc']
                ],
                columns: [{
                        "data": null,
                        "sortable": false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        name: 'action',
                        data: 'action'
                    },
                    {
                        name: 'name',
                        data: 'name'
                    },
                    {
                        name: 'nisn',
                        data: 'nisn'
                    },

                    {
                        name: 'nim',
                        data: 'nim'
                    },
                    {
                        name: 'school',
                        data: 'school'
                    },
                    {
                        name: 'department',
                        data: 'department'
                    },

                    {
                        name: 'gender',
                        data: 'gender'
                    },
                    {
                        name: 'birth_date',
                        data: 'birth_date'
                    },
                    {
                        name: 'birth_place',
                        data: 'birth_place'
                    },

                    {
                        name: 'address',
                        data: 'address'
                    },
                    {
                        name: 'phone_number',
                        data: 'phone_number'
                    },
                    {
                        name: 'date_start',
                        data: 'date_start'
                    },

                    {
                        name:'date_end'
                        date:'date_end'
                    },
                    {
                        name:'file'
                        date:'file'
                    },
                    {
                        name:'sertificate'
                        date:'sertificate'
                    },
                    {
                        name:'status'
                        date:'status'
                    },
                ],
            });
        }
    </script>
@endsection

