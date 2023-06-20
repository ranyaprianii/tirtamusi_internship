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
                @if (session('error'))
                <span class="bg-danger">{{ session('error') }}</span>
            @endif
                <form id="from-wizard1" action="{{ route('apprentince.store') }}" class="text-center mt-4" method="post"
                enctype="multipart/form-data">
                    @csrf
                    <ul id="top-tab-list" class="p-0">
                        <li class="active" id="account">
                            <a href="javascript:void();">
                                <i class="ri-user-fill"></i><span>Data Ketua</span>
                            </a>
                        </li>
                        <li id="personal">
                            <a href="javascript:void();">
                                <i class="ri-user-add-fill"></i><span>Data Anggota</span>
                            </a>
                        </li>
                        <li id="payment">
                            <a href="javascript:void();">
                                <i class="ri-file-fill"></i><span>File Pengajuan</span>
                            </a>
                        </li>
                        <li id="confirm">
                            <a href="javascript:void();">
                                <i class="ri-check-fill"></i><span>Selesai</span>
                            </a>
                        </li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card text-left">
                            <div class="row">
                                <div class="col-7">
                                    <h3 class="mb-4">Data Ketua:</h3>
                                </div>
                            </div>
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
                                <label for="file">Tanggal Mulai</label>
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
                                <label for="file">Tanggal Selesai</label>
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
                        {{-- <div class="col-12 d-flex justify-content-end mt-3">
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
@endsection --}}

<button type="button" name="next" class="btn btn-primary next action-button float-right"
                                value="Next">Selanjutnya</button>
                                <fieldset>
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3>Tambah Anggota:</h3>
                                        <h6 class="mb-4">*Isi jika terdapat anggota</h6>
                                    </div>
                                </div>
                                <div id="form-item">
                                </div>
                            </div>
                            <button type="button" id="btn_add" class="btn btn-primary float-left">Tambah
                                Anggota</button>
                            <button type="button" name="next" class="btn btn-primary next action-button float-right"
                                value="Next">Selanjutnya</button>
                            <button type="button" name="previous"
                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                value="Previous">Kembali</button>
                        </fieldset>
                        <fieldset>
                            <div class="form-card text-left">
                                <div class="row">
                                    <div class="col-7">
                                        <h3 class="mb-4">File Pengajuan PKL :</h3>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>File Pengajuan PKL:</label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                            <button type="button" name="previous"
                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                value="Previous">Previous</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <script>
        $(() => {
            initForm();
        })

        // Add New Form
        function initForm() {
            let rowIndex = 0;

            $("#btn_add").click(function() {
                $("#form-item").append(`
                            <div class="row">
                                <div class="col-md-12">
                                    <button class='btn btn-danger remove'>Hapus Form</button>
                                </div>
                                <br>
                                <br>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="department">Jurusan </label>
                                        <input type="text" name="department_detail[]" class="form-control" id="department"
                                            value="{{ old('department') }}" placeholder="Jurusan">
                                        @error('department')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap </label>
                                        <input type="text" name="name_detail[]" class="form-control" id="name"
                                            value="{{ old('name') }}" placeholder="Nama Lengkap">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nisn_nim">NISN/NIM</label>
                                        <input type="number" name="nisn_nim_detail[]" class="form-control" id="nisn_nim"
                                            value="{{ old('nisn_nim') }}" placeholder="NIM/NISN">
                                        @error('nisn_nim')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birth_date">Tanggal Lahir</label>
                                        <input type="date" name="birth_date_detail[]" class="form-control" id="birth_date"
                                            value="{{ old('birth_date') }}" placeholder="Tanggal Lahir">
                                        @error('birth_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birth_place">Tempat Lahir</label>
                                        <input type="text" name="birth_place_detail[]" class="form-control" id="birth_place"
                                            value="{{ old('birth_place') }}" placeholder="Tanggal Lahir">
                                        @error('birth_place')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select class="form-control" name="gender_detail[]" id="gender">
                                            <option value="gender" selected>Jenis Kelamin</option>
                                            @foreach (App\Models\Apprentince::GENDER_CHOICE as $key => $value)
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone_number">No. Handphone</label>
                                        <input type="number" name="phone_number_detail[]" class="form-control" id="phone_number"
                                            value="{{ old('phone_number') }}" placeholder=" No. Handphone">
                                        @error('phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <textarea class="form-control" name="address_detail[]" id="address" rows="1" placeholder="Alamat">{{ old('address') }}</textarea>
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                `);
            });

            $("#form-item").on('click', '.remove', function() {
                $(this).closest('.row').remove();
            });
        }
    </script>
@endsection
