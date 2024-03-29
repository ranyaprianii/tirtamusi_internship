@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Konfirmasi Data Pengajuan Magang</h3>
@endsection

@section('content')
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Konfirmasi Pengajuan Magang</h4>
                </div>
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
    <script>
        $(document).ready(function() {
            getDatatable();
        });

        let data_table = "";

        function getDatatable() {
            data_table = $("#data-table").DataTable({
                ajax: {
                    url: "{{ route('apprentince.datatable_verification') }}",
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
@endsection
