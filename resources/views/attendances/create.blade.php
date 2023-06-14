@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Tambah Data Presensi</h3>
@endsection


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Presensi</h4>
                
            </div>
            <div class="card-body">
                <form action="{{ route('attendance.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="foto">Upload Foto</label>
                                <div class="position-relative">
                                    <input type="file" class="form-control" placeholder="Upload Foto Selfie di lokasi magang..."
                                        value="{{ old('foto') }}" id="foto" name="foto" required>
                                        @error('foto')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="description">Keterangan</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Tambahkan keterangan (Hadir/Izin/Sakit)..."
                                        value="{{ old('description') }}" id="description" name="description" required>
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="{{ route('attendance.index') }}"
                                class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('js_after')


@endsection
