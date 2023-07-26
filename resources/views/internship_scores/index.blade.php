@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Data Penilaian Sertifikat Magang</h3>
@endsection

@section('content')
    @hasrole('Admin')
        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Data Penilaian</h4>

                    </div>

                    <a class="text-end btn btn-sm btn-danger" href="{{ route('internship_score.report_pdf') }}"><i class="fa fa-plus"></i> Cetak PDF</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Rata-rata</th>
                                    <th>Predikat</th>
                                    <th>Keterangan</th>
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


    @hasrole('Manager')
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Data Penilaian</h4>
                    </div>
                    <a class="text-end btn btn-sm btn-outline-info" href="{{ route('internship_score.create') }}"><i
                            class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Rata-rata</th>
                                    <th>Predikat</th>
                                    <th>Keterangan</th>
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
        @if (empty($data))
            <h5 class="text-center">Belum Ada Sertifikat</h5>
        @else
            <section class="section">
                <div class="row" id="table-borderless">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Penilaian Sertifikat</h3>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table table-borderless" style="width: 50%">
                                            <tr>
                                                <th>Nama</th>
                                                <td>:</td>
                                                <td>{{ $data['apprentince']['name'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>NISN/NIM</th>
                                                <td>:</td>
                                                <td>{{ $data['apprentince']['nisn_nim'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <td>:</td>
                                                <td>{{ $data['apprentince']['gender'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Asal Instansi</th>
                                                <td>:</td>
                                                <td>{{ $data['apprentince']['school'] }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Penempatan magang pada :</b></td>
                                            </tr>
                                            @if (!empty($data['apprentince']['unit_id']))
                                                <tr>
                                                    <th>Unit</th>
                                                    <td>:</td>
                                                    <td>{{ $data['apprentince']['unit']['name'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Sub Unit</th>
                                                    <td>:</td>
                                                    <td>{{ $data['apprentince']['unit']['section_unit']['name'] }}</td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <th>Bagian</th>
                                                    <td>:</td>
                                                    <td>{{ $data['apprentince']['division']['name'] }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Sub Bagian</th>
                                                    <td>:</td>
                                                    <td>{{ $data['apprentince']['division']['section_division']['name'] }}</td>
                                                </tr>
                                            @endif
                                        </table>
                                    </div>
                                    <hr>
                                    <!-- table with no border -->
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-2">
                                            <tbody>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Komponen Yang Dinilai</td>
                                                    <td>Nilai</td>
                                                    <td>Predikat</td>
                                                    <td>Keterangan</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Disiplin</td>
                                                    <td>{{ $data['discipline_score'] }}</td>
                                                    <td>{{ $data['predicate'] }}</td>
                                                    <td>{{ $data['description'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Kerja Sama</td>
                                                    <td>{{ $data['teamwork_score'] }}</td>
                                                    <td>{{ $data['predicate'] }}</td>
                                                    <td>{{ $data['description'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Inisiatif</td>
                                                    <td>{{ $data['initiative_score'] }}</td>
                                                    <td>{{ $data['predicate'] }}</td>
                                                    <td>{{ $data['description'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Kerajinan</td>
                                                    <td>{{ $data['diligent_score'] }}</td>
                                                    <td>{{ $data['predicate'] }}</td>
                                                    <td>{{ $data['description'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Tanggung Jawab</td>
                                                    <td>{{ $data['responsibility_score'] }}</td>
                                                    <td>{{ $data['predicate'] }}</td>
                                                    <td>{{ $data['description'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Sikap</td>
                                                    <td>{{ $data['attitude_score'] }}</td>
                                                    <td>{{ $data['predicate'] }}</td>
                                                    <td>{{ $data['description'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Kerja Sama</td>
                                                    <td>{{ $data['performance_score'] }}</td>
                                                    <td>{{ $data['predicate'] }}</td>
                                                    <td>{{ $data['description'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Prestasi</td>
                                                    <td>{{ $data['performance_score'] }}</td>
                                                    <td>{{ $data['predicate'] }}</td>
                                                    <td>{{ $data['description'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Jumlah</td>
                                                    <td>{{ $data['total_score'] }}</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Rata-rata</td>
                                                    <td>{{ $data['average_score'] }}</td>
                                                    <td>{{ $data['predicate'] }}</td>
                                                    <td>{{ $data['description'] }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <hr>
                                        <br>
                                        <div class="table-responsive">
                                            <h6>Keterangan Nilai :</h6>

                                            <table width="350px" mb-2>
                                                <tbody>
                                                    <tr>
                                                        <td>A</td>
                                                        <td>=</td>
                                                        <td>8,5 - 10</td>
                                                        <td>=</td>
                                                        <td>Baik Sekali</td>
                                                    </tr>
                                                    <tr>
                                                        <td>B</td>
                                                        <td>=</td>
                                                        <td>7,5 - 8,4</td>
                                                        <td>=</td>
                                                        <td>Baik</td>
                                                    </tr>
                                                    <tr>
                                                        <td>C</td>
                                                        <td>=</td>
                                                        <td>5,5 - 7,4</td>
                                                        <td>=</td>
                                                        <td>Cukup</td>
                                                    </tr>
                                                    <tr>
                                                        <td>D</td>
                                                        <td>=</td>
                                                        <td>3,5 - 5,4</td>
                                                        <td>=</td>
                                                        <td>Kurang</td>
                                                    </tr>
                                                    <tr>
                                                        <td>E</td>
                                                        <td>=</td>
                                                        <td>1,0 - 3,4</td>
                                                        <td>=</td>
                                                        <td>Kurang Sekali</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end mt-3">
                                            @if (!empty($data['apprentince']['sertificate']))
                                            <a href="{{ asset('assets/sertifikat/' . $data['apprentince']['sertificate']) }}"
                                                target="_blank" class="btn btn-outline-primary me-3 mb-1">Download Sertifikat</a>
                                        @endif
                                            <a href="{{ route('home') }}"
                                                class="btn btn-primary me-3 mb-1">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

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
                        url: "{{ route('internship_score.datatable') }}",
                    },
                    serverSide: true,
                    destroy: true,
                    order: [
                        [7, 'desc']
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
                            name: 'apprentince_name',
                            data: 'apprentince_name'
                        },
                        {
                            name: 'total_score',
                            data: 'total_score'
                        },
                        {
                            name: 'average_score',
                            data: 'average_score'
                        },

                        {
                            name: 'predicate',
                            data: 'predicate'
                        },

                        {
                            name: 'description',
                            data: 'description'
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
@endhasanyrole
