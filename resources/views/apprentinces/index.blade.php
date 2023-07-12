@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Data Siswa/Mahasiswa</h3>
@endsection

@section('content')
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Data Siswa/Mahasiswa Magang</h4>
                </div>
                @role('Calon Magang')
                    @if (count($data) == 0)
                        <a class="text-end btn btn-sm btn-outline-info" href="{{ route('apprentince.create') }}"><i
                                class="fa fa-plus"></i> Tambah Data</a>
                    @endif
                @endrole

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap" id="data-table" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Aksi</th>
                                <th>Nama Lengkap</th>
                                <th>Nisn/NIM</th>
                                <th>Asal Instansi</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Status Magang</th>
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
@endsection

@section('js_after')
    @role('Admin')
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
                        [8, 'desc']
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
                            name: 'nisn_nim',
                            data: 'nisn_nim'
                        },
                        {
                            name: 'school',
                            data: 'school'
                        },
                        {
                            name: 'date_start',
                            data: 'date_start'
                        },
                        {
                            name: 'date_end',
                            data: 'date_end'
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

    @hasanyrole('Siswa/Mahasiswa|Calon Magang')
        <script>
            $(document).ready(function() {
                getDatatable();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('apprentince.datatable_student') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [8, 'desc']
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
                            name: 'nisn_nim',
                            data: 'nisn_nim'
                        },
                        {
                            name: 'school',
                            data: 'school'
                        },
                        {
                            name: 'date_start',
                            data: 'date_start'
                        },
                        {
                            name: 'date_end',
                            data: 'date_end'
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
    @endhasanyrole
@endsection
