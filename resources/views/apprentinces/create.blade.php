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
                <div class="text-end">
                    <button class="btn btn-outline-primary">Tambah Form</button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('apprentince.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="name">Nama Lengkap</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap..."
                                        value="{{ old('name') }}" id="name" name="name" required>
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="school">Asal Instansi</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Asal Instansi (Universitas / Sekolah)..."
                                        value="{{ old('school') }}" id="school" name="school" required>
                                        @error('school')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="nisn_nim">NISN / NIM (Isi sesuai dengan data yang ada)</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="NISN / NIM..."
                                        value="{{ old('nisn_nim') }}" id="nisn_nim" name="nisn_nim" required>
                                        @error('nisn_nim')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="department">Jurusan</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Jurusan..."
                                        value="{{ old('department') }}" id="department" name="department" required>
                                        @error('department')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group has-icon-left">
                                <label for="address">Alamat</label>
                                <div class="position-relative">
                                    <textarea class="form-control" name="address" id="address" rows="3" placeholder="Alamat Lengkap..."
                                    required>{{ old('address') }}</textarea>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
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
                                    @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </select>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="birth_date">Tanggal Lahir</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" placeholder="Tanggal Lahir..."
                                        value="{{ old('birth_date') }}" id="birth_date" name="birth_date" required>
                                        @error('birth_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="phone_number">No. Handphone</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nomor Handphone..."
                                        value="{{ old('phone_number') }}" id="phone_number" name="phone_number" required>
                                        @error('phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="birth_place">Tempat Lahir</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Tempat Lahir..."
                                        value="{{ old('birth_place') }}" id="birth_place" name="birth_place" required>
                                        @error('birth_place')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="date_start">Tanggal Mulai</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" placeholder="Tanggal Mulai Magang..."
                                        value="{{ old('date_start') }}" id="date_start" name="date_start" required>
                                        @error('date_start')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="date_end">Tanggal Selesai</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" placeholder="Tanggal Selesai Magang..."
                                        value="{{ old('date_end') }}" id="date_end" name="date_end" required>
                                        @error('date_end')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="file">Lampiran Magang</label>
                            <div class="position-relative">
                                <input type="file" class="form-control" placeholder="Lampiran Pengajuan Magang..."
                                    value="{{ old('file') }}" id="file" name="file" required>
                                    @error('file')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
