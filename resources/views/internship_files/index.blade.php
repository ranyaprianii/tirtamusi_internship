@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Laporan Magang </h3>
@endsection

@section('content')
    @hasrole('Admin')
        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Laporan Magang</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Judul Laporan</th>
                                    <th>File Laporan</th>
                                    <th>Status</th>
                                    <th>Diinput pada</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endhasrole

    @role('Manager')
    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Laporan Magang</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="data-table" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Judul Laporan</th>
                                <th>File Laporan</th>
                                <th>Status</th>
                                <th>Diinput pada</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @endrole

    @role('Siswa/Mahasiswa')
        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Laporan Magang</h4>
                    </div>
                    @if (count($data) == 0)
                        <a class="text-end btn btn-sm btn-outline-info" href="{{ route('internship_file.create') }}"><i
                                class="fa fa-plus"></i> Tambah Data</a>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Judul Laporan</th>
                                    <th>File Laporan</th>
                                    <th>Status</th>
                                    <th>Diinput pada</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    @endrole
@endsection

@section('js_after')
    @hasrole('Admin')
        <script>
            $(document).ready(function() {
                getDatatable();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('internship_file.datatable') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [6, 'desc']
                    ],
                    columns: [{
                            data: null,
                            sortable: false,
                            searchable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            name: 'action',
                            data: 'action',
                            sortable: false,
                            searchable: false,
                        },
                        {
                            name: 'apprentince_name',
                            data: 'apprentince_name'
                        },
                        {
                            name: 'report_file',
                            data: 'report_file'
                        },
                        {
                            name: 'file',
                            data: 'file'
                        },
                        {
                            name: 'status',
                            data: 'status'
                        },
                        {
                            name: 'created_at',
                            data: 'created_at'
                        },
                    ],
                });
            }
        </script>
    @endrole

    @hasrole('Manager')
    <script>
        $(document).ready(function() {
            getDatatable();
        });

        let data_table = "";

        function getDatatable() {
            data_table = $("#data-table").DataTable({
                ajax: {
                    url: "{{ route('internship_file.datatable') }}",
                },
                serverSide: true,
                destroy: true,
                order: [
                    [5, 'desc']
                ],
                columns: [{
                        data: null,
                        sortable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        name: 'apprentince_name',
                        data: 'apprentince_name'
                    },
                    {
                        name: 'report_file',
                        data: 'report_file'
                    },
                    {
                        name: 'file',
                        data: 'file'
                    },
                    {
                        name: 'status',
                        data: 'status'
                    },
                    {
                        name: 'created_at',
                        data: 'created_at'
                    },
                ],
            });
        }
    </script>
    @endrole

    @role('Siswa/Mahasiswa')
        <script>
            $(document).ready(function() {
                getDatatable();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('internship_file.datatable_student') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [5, 'desc']
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
                            data: 'action',
                            sortable: false,
                            searchable: false,
                        },
                        {
                            name: 'report_file',
                            data: 'report_file'
                        },
                        {
                            name: 'file',
                            data: 'file'
                        },
                        {
                            name: 'status',
                            data: 'status'
                        },
                        {
                            name: 'created_at',
                            data: 'created_at'
                        },
                    ],
                });
            }
        </script>
    @endrole
@endsection
