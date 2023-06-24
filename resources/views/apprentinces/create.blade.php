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
                <h4 class="card-title">Tambah Data</h4>
            </div>

            <div class="card-body">
                @if (session('error'))
                    <p>{{ session('error') }}</p>
                @endif

                <form action="{{ route('apprentince.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nisn_nim">NISN/NIM</label>
                                <input type="text" name="nisn_nim" class="form-control" id="nisn_nim">
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Input text with help</label>
                                <small class="text-muted">eg.<i>someone@example.com</i></small>
                                <input type="text" class="form-control" id="helpInputTop">
                            </div>

                            <div class="form-group">
                                <label for="helperText">With Helper Text</label>
                                <input type="text" id="helperText" class="form-control" placeholder="Name">
                                <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="disabledInput">Disabled Input</label>
                                <input type="text" class="form-control" id="disabledInput" placeholder="Disabled Text"
                                    disabled="">
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">Readonly Input</label>
                                <input type="text" class="form-control" id="readonlyInput" readonly="readonly"
                                    value="You can't update me :P">
                            </div>

                            <div class="form-group">
                                <label for="disabledInput">Static Text</label>
                                <p class="form-control-static" id="staticInput">email@mazer.com</p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </section>
@endsection
