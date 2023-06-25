@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Edit Data Siswa/Mahasiswa</h3>
@endsection


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data Siswa/Mahasiswa</h4>
            </div>

            <div class="card-body">
                @if (session('error'))
                    <p>{{ session('error') }}</p>
                @endif

                <form action="{{ route('apprentince.update',Crypt::encrypt($data['id'])) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="name">Nama Lengkap</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control"
                                        placeholder="Nama Lengkap" value="{{ old('name',$data['name']) }}" id="name" name="name" required>
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" >
                            <div class="form-group has-icon-left">
                                <label for="school">Asal Instansi</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control"  placeholder="Asal Instansi"
                                    value="{{ old('school',$data['school']) }}" id="school" name="school" required>
                                    @error('school')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
                                    <input type="text" class="form-control"
                                        placeholder="Nisn / Nim" value="{{ old('nisn_nim',$data['nisn_nim']) }}" id="nisn_nim" name="nisn_nim" required>
                                        @error('nisn_nim')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" >
                            <div class="form-group has-icon-left">
                                <label for="department">Jurusan</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control"  placeholder="Jurusan"
                                    value="{{ old('department',$data['department']) }}" id="department" name="department" required>
                                    @error('department')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12" >
                            <div class="form-group has-icon-left">
                                <label for="address">Alamat</label>
                                <div class="position-relative">
                                    <textarea type="text" class="form-control"  placeholder="Alamat Lengkap"
                                    value="{{ old('address',$data['address']) }}" id="address" name="address" required ></textarea>
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-control" name="gender" id="gender" required>
                                    <option value="" selected>Pilih Salah Satu</option>
                                    @foreach (App\Models\Apprentince::GENDER_CHOICE as $key => $value)
                                        <option value="{{ $key }}" {{ $key == $data['gender'] ? 'selected' : ''  }} >{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-6" >
                            <div class="form-group has-icon-left">
                                <label for="phone_number">Nomor Handphone</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control"  placeholder="Nomor Handphone Aktif"
                                    value="{{ old('phone_number',$data['phone_number']) }}" id="phone_number" name="phone_number" required>
                                    @error('phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
                                    <input type="text" class="form-control"
                                        placeholder="Tempat Lahir" value="{{ old('birth_place',$data['birth_place']) }}" id="birth_place" name="birth_place" required>
                                        @error('birth_place')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" >
                            <div class="form-group has-icon-left">
                                <label for="birth_date">Tanggal Lahir</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control"  placeholder="Tanggal Lahir"
                                    value="{{ old('birth_date',$data['birth_date']) }}" id="birth_date" name="birth_date" required>
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
                                <label for="date_start">Tanggal Mulai magang</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control"
                                        placeholder="Tanggal Mulai" value="{{ old('date_start',$data['date_start']) }}" id="date_start" name="date_start" required>
                                        @error('date_start')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" >
                            <div class="form-group has-icon-left">
                                <label for="date_end">Tanggal Selesai Magang</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control"  placeholder="Tanggal Selesai"
                                    value="{{ old('date_end',$data['date_end']) }}" id="date_end" name="date_end" required>
                                    @error('date_end')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="file">File Pengajuan Magang</label>
                                <div class="position-relative">
                                    <input type="file" class="form-control"
                                        placeholder="File Pengajuan Magang" value="{{ old('file',$data['file']) }}" id="file" name="file" required>
                                        @error('file')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 d-flex justify-content-end mt-3">
                        <a href="{{ route('apprentince.index') }}"
                            class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                    </div>
                </form>
            </div>
        </div>


    </section>
@endsection
