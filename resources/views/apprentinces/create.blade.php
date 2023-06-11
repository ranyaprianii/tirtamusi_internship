@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Tambah Data Mahasiswa / Siswa</h3>
@endsection


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Mahasiwa / Siswa</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('apprentince.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="name">Nama Lengkap</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama..."
                                        value="{{ old('name') }}" id="name" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="school">Asal Instansi</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama..."
                                        value="{{ old('school') }}" id="school" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="nisn_nim">NISN / NIM (Isi sesuai dengan data yang ada)</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama..."
                                        value="{{ old('nisn_nim') }}" id="nisn_nim" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="department">Jurusan</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama..."
                                        value="{{ old('department') }}" id="department" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group has-icon-left">
                                <label for="address">Alamat</label>
                                <div class="position-relative">
                                    <textarea class="form-control" name="address" id="address" rows="3" placeholder="Alamat..." required>{{ old('address') }}</textarea>
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="gender">Jenis Kelamin</label>
                            <div class="position-relative mb-2">
                                <select class="form-select" name="gender" id="gender" required>
                                    <option value="" selected>Pilih Salah Satu</option>
                                    @foreach (App\Models\Apprentince::GENDER_CHOICE as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="birth_date">Tanggal Lahir</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" placeholder="Nama..."
                                        value="{{ old('birth_date') }}" id="birth_date" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="phone_number">No. Handphone</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama..."
                                        value="{{ old('phone_number') }}" id="phone_number" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="birth_place">Tempat Lahir</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama..."
                                        value="{{ old('birth_place') }}" id="birth_place" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="date_start">Tanggal Mulai</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" placeholder="Nama..."
                                        value="{{ old('date_start') }}" id="date_start" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="date_end">Tanggal Selesai</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" placeholder="Nama..."
                                        value="{{ old('date_end') }}" id="date_end" required>
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="file">Lampiran Magang</label>
                            <div class="position-relative">
                                <input type="file" class="form-control" placeholder="Nama..."
                                    value="{{ old('file') }}" id="file" required>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="{{ route('apprentince.index') }}"
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
