@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Verifikasi Data Laporan Magang</h3>
@endsection


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Verifikasi Data Laporan Magang</h4>

            </div>
            <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('internship_file.update_verification', Crypt::encrypt($data['id'])) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="file">File Sertifikat</label>
                                <div class="position-relative">
                                    <input type="file" name="file" id="file" class="form-control">
                                    @error('file')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="{{ route('internship_file.index') }}"
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
