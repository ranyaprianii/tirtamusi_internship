@extends('layouts.app')

@section('content-header')
    <h3>Presensi Masuk</h3>
@endsection


@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Presensi Masuk</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('attendance.store_present_in') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-icon-left">
                                        <label for="foto">Status Kehadiran</label>
                                        <div class="position-relative">
                                            <select name="status"class="form-select" required>
                                                @foreach (App\Models\Attendance::STATUS_CHOICE as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <p class="text-muted"></p>
                                    </div>

                                    <input type="hidden" name="longitude" id="longitude">
                                    <input type="hidden" name="latitude" id="latitude">

                                    <div class="col-12 d-flex justify-content-end mt-3">
                                        <a href="{{ route('attendance.index') }}"
                                            class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                                        <button type="submit" onclick="return confirm('Simpan Data?')"
                                            class="btn btn-primary me-1 mb-1">Simpan</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('js_after')
    <script>
        $(document).ready(function() {
            initGeolocation();
        });

        function initGeolocation() {
            if (navigator.geolocation) {
                // Call getCurrentPosition with success and failure callbacks
                navigator.geolocation.getCurrentPosition(success, fail);
            } else {
                alert("Sorry, your browser does not support geolocation services.");
            }
        }

        function success(position) {
            $("#longitude").val(position.coords.longitude);
            $("#latitude").val(position.coords.latitude);
        }

        function fail() {
            // Could not obtain location
        }
    </script>
@endsection
