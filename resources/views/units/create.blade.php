@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Tambah Data Unit</h3>
@endsection


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Unit</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('unit.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-icon-left">
                                <label for="name">Nama Unit</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Unit..."
                                        value="{{ old('name') }}" id="name" name="name" required>
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group has-icon-left">
                                    <label for="address">Deskripsi</label>
                                    <div class="position-relative">
                                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Deskripsi..."
                                        required>{{ old('description') }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        <div class="form-control-icon">
                                            <span class="fa-fw select-all fas"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-3">
                                <a href="{{ route('unit.index') }}"
                                    class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('js_after')
@endsection
