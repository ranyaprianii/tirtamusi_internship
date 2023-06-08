@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Data Mahasiswa</h3>
@endsection


@section('content')
<div class="row">
    <form action="{{ route('apprentince.store') }}" method="post">
        @csrf
    {{-- <div class="col-12">
        <div class="form-group has-icon-left">
            <label for="first-name-icon">No.</label>
            <div class="position-relative">
                <input type="text" class="form-control"
                    placeholder="Input with icon left" id="first-name-icon">
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-12">
        <div class="form-group has-icon-left">
            <label for="email-id-icon">Nama</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Nama..." value="{{ old('name') }}" required id="name">
                <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group has-icon-left">
            <label for="mobile-id-icon">NISN</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="NISN..." value="{{ old('nisn') }}" required id="nisn">
                <div class="form-control-icon">
                    <i class="bi bi-phone"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group has-icon-left">
            <label for="password-id-icon">NIM</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="NIM..." value="{{ old('nim') }}" required id="nim">
                <div class="form-control-icon">
                    <i class="bi bi-lock"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class="form-group has-icon-left">
            <label for="password-id-icon">Asal Kampus</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Asal Kampus..." value="{{ old('school') }}" required id="school">
                <div class="form-control-icon">
                    <i class="bi bi-lock"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class="form-group has-icon-left">
            <label for="password-id-icon">Asal Jurusan</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Asal Jurusan..." value="{{ old('department') }}" required id="department">
                <div class="form-control-icon">
                    <i class="bi bi-lock"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class="form-group has-icon-left">
            <label for="password-id-icon">Jenis Kelamin</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Jenis Kelamin..." value="{{ old('gender') }}" required id="gender">
                <div class="form-control-icon">
                    <i class="bi bi-lock"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class="form-group has-icon-left">
            <label for="password-id-icon">Tanggal Lahir</label>
            <div class="position-relative">
                <input type="date" class="form-control" placeholder="Tanggal Lahir..." value="{{ old('birth_date') }}" required id="birth_date">
                <div class="form-control-icon">
                    <span class="fa-fw select-all fas"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group has-icon-left">
            <label for="password-id-icon">Tempat Lahir</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Tempat Lahir..." value="{{ old('birth_place') }}" required id="birth_place">
                <div class="form-control-icon">
                    <i class="bi bi-lock"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group has-icon-left">
            <label for="password-id-icon">Alamat</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Alamat Lengkap..." value="{{ old('address') }}" required id="address">
                <div class="form-control-icon">
                    <i class="bi bi-lock"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class="form-group has-icon-left">
            <label for="password-id-icon">No. Hp</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Nomor Hp..." value="{{ old('phone_number') }}" required id="phone_number">
                <div class="form-control-icon">
                    <span class="fa-fw select-all fas"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class="form-group has-icon-left">
            <label for="password-id-icon">Tanggal Mulai</label>
            <div class="position-relative">
                <input type="date" class="form-control" placeholder="Tanggal Mulai..." value="{{ old('date_start') }}" required id="date_start">
                <div class="form-control-icon">
                    <span class="fa-fw select-all fas"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class="form-group has-icon-left">
            <label for="password-id-icon">Tanggal Selesai</label>
            <div class="position-relative">
                <input type="date" class="form-control" placeholder="Tanggal Selesai..." value="{{ old('date_end') }}" required id="date_end">
                <div class="form-control-icon">
                    <span class="fa-fw select-all fas"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class="form-group has-icon-left">
            <label for="password-id-icon">File Pendukung</label>
            <div class="position-relative">
                <input type="file" class="form-control" placeholder="File..." value="{{ old('file') }}" required id="file">
                <div class="form-control-icon">
                    <span class="fa-fw select-all fas"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class="form-group has-icon-left">
            <label for="certificate-id-icon">Sertifikat Magang</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Sertifikat..." value="{{ old('sertificate') }}" required id="sertificate">
                <div class="form-control-icon ">
                    <span class="fa-fw select-all fas"></span>

                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class="form-group has-icon-left">
            <label for="password-id-icon">Status</label>
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Status..." value="{{ old('status') }}" required id="status">
                <div class="form-control-icon">
                    <span class="fa-fw select-all fas"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">

        <div class='form-check'>
            <div class="checkbox mt-2">
                <input type="checkbox" id="remember-me-v" class='form-check-input'
                    checked>
                <label for="remember-me-v">Remember Me</label>
            </div>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
        <button type="reset"
            class="btn btn-light-secondary me-1 mb-1">Reset</button>
    </div>
</form>
</div>

@endsection

@section('js_after')
@endsection
