@extends('layouts.app')

@section('css_after')
    {{-- Select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Edit Bagian</h4>
            </div>
        </div>

        {{-- Error Message --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="card-body">
            <form action="{{ route('division.update', Crypt::encrypt($data['id'])) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Nama Bagian </label>
                    <input type="text" name="name" class="form-control" id="name"
                        value="{{ old('name', $data['name']) }}" placeholder="Nama Bagian..." required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi </label>
                    <input type="text" name="description" class="form-control" id="description"
                        value="{{ old('description', $data['description']) }}" placeholder="Deskripsi..." required>
                </div>
                <div class="form-group">

                <div class="col-12 d-flex justify-content-end mt-3">
                    <a href="{{ route('division.index') }}" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection

@section('js_after')
    {{-- Select 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- <script>
        $(document).ready(function() {
            $(".select_role").select2();
        });
    </script> --}}
@endsection
