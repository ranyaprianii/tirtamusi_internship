@extends('layouts.app')

@section('css_after')
    {{-- Select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content-header')
    <h3>Edit Data Penialaian Sertifikat Magang</h3>
@endsection


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data Penilaian Sertifikat</h3>

            </div>
            <div class="card-body">
                <form action="{{ route('internship_score.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Pilih Siswa/Mahasiswa</label>
                                        <select name="apprentince_id" class="form-control mb-3 select_apprentince">
                                            @isset($apprentinces)
                                                @foreach ($apprentinces as $item)
                                                    <option value="apprentince_name" {{ $item->id == $data->apprentince_id ? 'selected' : '' }}>
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                            @endisset
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="discipline_score">Disiplin</label>
                                        <div class="position-relative">
                                            <input type="number" min="1" max="10" step="0.1" class="form-control"
                                                placeholder="Masukkan Nilai Disiplin" value="{{ old('discipline_score', $data['discipline_score']) }}"
                                                id="discipline_score" name="discipline_score" required>
                                            @error('discipline_score')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-control-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312V4.002Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-icon-left">
                                        <label for="teamwork_score">Kerjasama</label>
                                        <div class="position-relative">
                                            <input type="number"  min="1" max="10" step="0.01" class="form-control"
                                                placeholder="Masukkan Nilai Kerjasama" value="{{ old('teamwork_score', $data['teamwork_score']) }}"
                                                id="teamwork_score" name="teamwork_score" required>
                                            @error('teamwork_score')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-control-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-2-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="initiative_score">Inisiatif</label>
                                        <div class="position-relative">
                                            <input type="number"  min="1" max="10" step="0.01" class="form-control"
                                                placeholder="Masukkan Nilai Inisiatif" value="{{ old('initiative_score' , $data['initiative_score']) }}"
                                                id="initiative_score" name="initiative_score" required>
                                            @error('initiative_score')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-control-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-icon-left">
                                        <label for="diligent_score">Kerajinan</label>
                                        <div class="position-relative">
                                            <input type="number"  min="1" max="10" step="0.01" class="form-control"
                                                placeholder="Masukkan Nilai Kerajinan" value="{{ old('diligent_score', $data['diligent_score']) }}"
                                                id="diligent_score" name="diligent_score" required>
                                            @error('diligent_score')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-control-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-4-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group has-icon-left">
                                        <label for="responsibility_score">Tanggung Jawab</label>
                                        <div class="position-relative">
                                            <input type="number"  min="1" max="10" step="0.01" class="form-control"
                                                placeholder="Masukkan Nilai Tanggung Jawab"
                                                value="{{ old('responsibility_score', $data['responsibility_score']) }}" id="responsibility_score"
                                                name="responsibility_score" required>
                                            @error('responsibility_score')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-control-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-5-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group has-icon-left">
                                        <label for="attitude_score">Sikap</label>
                                        <div class="position-relative">
                                            <input type="number"  min="1" max="10" step="0.01" class="form-control"
                                                placeholder="Masukkan Nilai Sikap" value="{{ old('attitude_score', $data['attitude_score']) }}"
                                                id="attitude_score" name="attitude_score" required>
                                            @error('attitude_score')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-control-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-6-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.21 3.855c-1.868 0-3.116 1.395-3.116 4.407 0 1.183.228 2.039.597 2.642.569.926 1.477 1.254 2.409 1.254 1.629 0 2.847-1.013 2.847-2.783 0-1.676-1.254-2.555-2.508-2.555-1.125 0-1.752.61-1.98 1.155h-.082c-.012-1.946.727-3.036 1.805-3.036.802 0 1.213.457 1.312.815h1.29c-.06-.908-.962-1.899-2.573-1.899Zm-.099 4.008c-.92 0-1.564.65-1.564 1.576 0 1.032.703 1.635 1.558 1.635.868 0 1.553-.533 1.553-1.629 0-1.06-.744-1.582-1.547-1.582Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group has-icon-left">
                                        <label for="performance_score">Prestasi</label>
                                        <div class="position-relative">
                                            <input type="number"  min="1" max="10" step="0.01" class="form-control"
                                                placeholder="Masukkan Nilai Prestasi"
                                                value="{{ old('performance_score', $data['performance_score']) }}" id="performance_score"
                                                name="performance_score" required>
                                            @error('performance_score')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-control-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-7-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM5.37 5.11h3.972v.07L6.025 12H7.42l3.258-6.85V4.002H5.369v1.107Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 d-flex justify-content-end mt-3">
                                <a href="{{ route('internship_score.index') }}"
                                    class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                            </div>
                </form>
            </div>
        </div>
        <br>
        <h6>Parameter Penilaian :</h6>

        <table width="350px">
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
        </table>
    </section>
@endsection

@section('js_after')
    {{-- Select 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".select_apprentince").select2();
        });
    </script>
@endsection
