@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Presensi Siswa/Mahasiswa</h3>
@endsection

@section('content')
    <!-- Basic Tables start -->
    @hasanyrole('Admin|Manager')
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Presensi Siswa/Mahasiswa</h4>
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
                                    <th>Waktu Masuk</th>
                                    <th>Waktu Keluar</th>
                                    <th>Keterangan</th>
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

    @hasrole('Siswa/Mahasiswa')
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Presensi Siswa/Mahasiswa</h4>
                    </div>
                    @if ($absensiMasuk)
                        @if ($absensiKeluar)
                        @else
                            <form action="{{ route('attendance.store_present_out') }}" method="post">
                                @csrf
                                @method('put')

                                <input type="hidden" name="longitude" id="longitude">
                                <input type="hidden" name="latitude" id="latitude">
                                <button class="text-end btn btn-sm btn-outline-info" type="submit"
                                    onclick="return confirm('Simpan Data?')"><i class="fa fa-plus"></i>
                                    Presensi
                                    Keluar</button>

                            </form>
                        @endif
                    @else
                        <a class="text-end btn btn-sm btn-outline-info" href="{{ route('attendance.create_present') }}"><i
                                class="fa fa-plus"></i> Presensi Masuk</a>
                    @endif
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Waktu Masuk</th>
                                    <th>Waktu Keluar</th>
                                    <th>Keterangan</th>
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
                        url: "{{ route('attendance.datatable') }}",
                    },
                    serverSide: true,
                    destroy: true,
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
                            name: 'apprentince_name',
                            data: 'apprentince_name'
                        },
                        {
                            name: 'present_in',
                            data: 'present_in'
                        },
                        {
                            name: 'present_out',
                            data: 'present_out'
                        },
                        {
                            name: 'status',
                            data: 'status'
                        },
                    ],
                });
            }
        </script>
    @endhasanyrole


    @hasrole('Siswa/Mahasiswa')
        <script>
            $(document).ready(function() {
                getDatatable();
                initGeolocation();
            });

            let data_table = "";

            function getDatatable() {
                data_table = $("#data-table").DataTable({
                    ajax: {
                        url: "{{ route('attendance.datatable_student') }}",
                    },
                    serverSide: true,
                    destroy: true,
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
                            name: 'present_in',
                            data: 'present_in'
                        },
                        {
                            name: 'present_out',
                            data: 'present_out'
                        },
                        {
                            name: 'status',
                            data: 'status'
                        },
                    ],
                });
            }

            function initGeolocation() {
                if (navigator.geolocation) {
                    // Call getCurrentPosition with success and failure callbacks
                    navigator.geolocation.getCurrentPosition(success, fail);
                } else {
                    alert("Sorry, your browser does not support geolocation services.");
                }
            }

            function success(position) {
                $("#longitude").val(position.coords.longitude);
                $("#latitude").val(position.coords.latitude);
            }

            function fail() {
                // Could not obtain location
            }
        </script>
    @endrole
@endsection
