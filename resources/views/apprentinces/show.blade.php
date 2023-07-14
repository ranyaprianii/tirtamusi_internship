@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Data Siswa/Mahasiswa</h3>
@endsection
@section('content')
    <section class="section">
        <div class="row " id="table-borderless">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Siswa/Mahasiswa</h3>
                        <div class="card-content">
                            <!-- table with no border -->
                            <div class="table-responsive">
                                <table class="table table-borderless mb-2">
                                    <tbody>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td>:</td>
                                            <td>{{ $data['name'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>Nisn/Nim</td>
                                            <td>:</td>
                                            <td>{{ $data['nisn_nim'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>Asal Instansi</td>
                                            <td>:</td>
                                            <td>{{ $data['school'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>Jurusan</td>
                                            <td>:</td>
                                            <td>{{ $data['department'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{ $data['address'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>:</td>
                                            <td>{{ $data['gender'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>Nomor Handphone</td>
                                            <td>:</td>
                                            <td>{{ $data['phone_number'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td>:</td>
                                            <td>{{ $data['birth_place'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>:</td>
                                            <td>{{ $data['birth_date'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Mulai Magang</td>
                                            <td>:</td>
                                            <td>{{ $data['date_start'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Selesai Magang</td>
                                            <td>:</td>
                                            <td>{{ $data['date_end'] }}</td>
                                        </tr>

                                        <tr>
                                            <td>File Pengajuan</td>
                                            <td>:</td>
                                            <td><a target="_blank" class="btn btn-primary"
                                                    href="{{ asset('assets/pengajuan/' . $data['file']) }}">Lihat Data</a>
                                            </td>
                                        </tr>
                                        @if (!empty($data['letter_file']))
                                            <tr>
                                                <td>Surat Balasan</td>
                                                <td>:</td>
                                                <td><a target="_blank" class="btn btn-primary"
                                                        href="{{ asset('assets/surat balasan/' . $data['letter_file']) }}">Lihat
                                                        Data</a>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>


                                </table>
                                <div class="col-12 d-flex justify-content-end mt-3">
                                    <a href="{{ route('apprentince.index') }}"
                                        class="btn btn-primary me-3 mb-1">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('js_after')
@endsection
