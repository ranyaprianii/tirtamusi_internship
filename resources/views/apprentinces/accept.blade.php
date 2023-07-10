@extends('layouts.app')

@section('css_after')
    {{-- Select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content-header')
    <h3>Verifikasi Data Siswa/Mahasiswa</h3>
@endsection


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Verifikasi Data Siswa/Mahasiswa</h4>
            </div>

            <div class="card-body">
                @if (session('error'))
                    <p>{{ session('error') }}</p>
                @endif

                <form action="{{ route('apprentince.accept', Crypt::encrypt($data['id'])) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="name">Nama Lengkap</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ $data['name'] }}" id="name" name="name" disabled>
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group has-icon-left">
                                <label for="school">Asal Instansi</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ $data['school'] }}" id="school" name="school" disabled>
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="nisn_nim">NISN/NIM</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ $data['nisn_nim'] }}" id="nisn_nim" name="nisn_nim" disabled>
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group has-icon-left">
                                <label for="department">Jurusan</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ $data['department'] }}" id="department" name="department" disabled>
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="address">Alamat</label>
                                <div class="position-relative">
                                    <textarea type="text" class="form-control" placeholder="Alamat Lengkap" id="address" name="address" disabled>
                                        {{ $data['address'] }}
                                    </textarea>
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="gender">Jenis Kelamin</label>
                                <input type="text" class="form-control" placeholder="Nama Lengkap"
                                    value="{{ $data['gender'] }}" id="gender" name="gender" disabled>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group has-icon-left">
                                <label for="phone_number">Nomor Handphone</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ $data['phone_number'] }}" id="phone_number" name="phone_number" disabled>
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="birth_place">Tempat Lahir</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ $data['birth_place'] }}" id="birth_place" name="birth_place" disabled>
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group has-icon-left">
                                <label for="birth_date">Tanggal Lahir</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ $data['birth_date'] }}" id="birth_date" name="birth_date" disabled>
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="date_start">Tanggal Mulai magang</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ $data['date_start'] }}" id="date_start" name="date_start" disabled>
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col--6">
                            <div class="form-group has-icon-left">
                                <label for="date_end">Tanggal Selesai Magang</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ $data['date_end'] }}" id="date_end" name="date_end" disabled>
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="form-group has-icon-left">
                                <label for="file">File Pengajuan Magang</label>
                                <div class="position-relative">
                                    <a target="_blank" class="btn btn-primary mt-2"
                                        href="{{ asset('assets/pengajuan/' . $data['file']) }}">Lihat Data</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12 text-center">
                            <div class="form-group has-icon-left">
                                <label for="letter_file">Surat Balasan</label>
                                <div class="position-relative">
                                    <input type="file" class="form-control" placeholder="Kirim Surat Balasan"
                                        value="{{ old('letter_file') }}" id="letter_file" name="letter_file" required>
                                    @error('letter_file')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                    <p><span class="text-danger">*</span>File Ekstensi PDF (Maks 3 MB)</p>
                                </div>
                            </div>
                        </div>
                        <h5>Penempatan Bagian / Unit</h5>
                        <div class="col-md-6">
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="radio" name="radio_select"
                                    id="select_division">
                                <label class="form-check-label" for="select_division">
                                    Bagian
                                </label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="radio" name="radio_select" id="select_unit">
                                <label class="form-check-label" for="select_unit">
                                    Unit
                                </label>
                            </div>
                        </div>

                        <div class="division_group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="division">Bagian</label>
                                        <select class="form-control" name="division" id="division">
                                            <option value="" selected>Pilih Salah Satu</option>
                                            @foreach ($divisions as $item)
                                                <option value="{{ Crypt::encrypt($item->id) }}">{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('division')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="sub_division">Sub bagian</label>
                                        <select class="form-control" name="sub_division" id="sub_division">
                                            <option value="" selected>Pilih Salah Satu</option>
                                            @foreach ($divisions as $item)
                                                @foreach ($item->section_divisions as $item2)
                                                    <option value="{{ Crypt::encrypt($item2->id) }}">{{ $item2->name }}
                                                    </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                        @error('sub_division')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="unit_group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="unit">Unit</label>
                                        <select class="form-control" name="unit" id="unit">
                                            <option value="" selected>Pilih Salah Satu</option>
                                            @foreach ($units as $item)
                                                <option value="{{ Crypt::encrypt($item->id) }}">{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('unit')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="sub_unit">Sub unit</label>
                                        <select class="form-control" name="sub_unit" id="sub_unit">
                                            <option value="" selected>Pilih Salah Satu</option>
                                            @foreach ($units as $item)
                                                @foreach ($item->section_units as $item2)
                                                    <option value="{{ Crypt::encrypt($item2->id) }}">{{ $item2->name }}
                                                    </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                        @error('sub_unit')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end mt-3">
                        <a href="{{ route('apprentince.index_verification') }}"
                            class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('js_after')
    {{-- Select 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#division").select2({
                width: '100%'
            });
            $("#unit").select2({
                width: '100%'
            });
            $("#sub_division").select2({
                width: '100%'
            });
            $("#sub_unit").select2({
                width: '100%'
            });

            $(".division_group").hide()
            $(".unit_group").hide()

            filter();
        });

        function filter() {
            $("#select_division").click(function() {
                $(".division_group").show()
                $(".unit_group").hide()
                $("#unit").val('').trigger('change');
                $("#sub_unit").val('').trigger('change');
            })

            $("#select_unit").click(function() {
                $(".unit_group").show()
                $(".division_group").hide()
                $("#disivion").val('').trigger('change');
                $("#sub_division").val('').trigger('change');
            })
        }
    </script>
@endsection
