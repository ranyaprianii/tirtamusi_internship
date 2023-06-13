@extends('layouts.app')

@section('css_after')
    {{-- Select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Edit Unit</h4>
            </div>
        </div>

        {{-- Error Message --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="card-body">
            <form action="{{ route('unit.update', Crypt::encrypt($unit['id'])) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Nama Unit </label>
                    <input type="text" name="name" class="form-control" id="name"
                        value="{{ old('name', $unit['name']) }}" placeholder="Nama Unit..." required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi </label>
                    <input type="description" name="description" class="form-control" id="description"
                        value="{{ old('description', $unit['description']) }}" placeholder="Deskripsi..." required>
                </div>
                <div class="form-group">

                <a href="{{ route('unit.index') }}" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
