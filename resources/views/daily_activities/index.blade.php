@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Aktivitas Siswa/Mahasiswa</h3>
@endsection

@section('content')
    @hasanyrole('Admin|Manager')
        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Aktivitas Siswa/Mahasiswa</h4>
                    </div>
                    @hasrole('Admin')
                    <a class="text-end btn btn-sm btn-danger" href="#"><i
                        class="fa fa-plus"></i> Cetak PDF</a>
                        @endrole
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Catatan Aktivitas</th>
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
    @endhasanyrole



    @role('Siswa/Mahasiswa')
        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Aktivitas Siswa/Mahasiswa</h4>
                    </div>
                    <a class="text-end btn btn-sm btn-outline-info" href="{{ route('daily_activity.create') }}"><i
                            class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Catatan Aktivitas</th>
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
    @hasanyrole('Admin|Manager')
        <script>
            $(document).ready(function() {
                getDatatable();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('daily_activity.datatable') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [3, 'desc']
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
                            name: 'apprentince_name',
                            data: 'apprentince_name'
                        },
                        {
                            name: 'activity',
                            data: 'activity'
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

    @role('Siswa/Mahasiswa')
        <script>
            $(document).ready(function() {
                getDatatable();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('daily_activity.datatable_student') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [3, 'desc']
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
                            name: 'activity',
                            data: 'activity'
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
