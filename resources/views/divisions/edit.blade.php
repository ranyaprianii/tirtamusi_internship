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
                        value="{{ old('description', $data['description']) }}" placeholder="Deskripsi...">
                </div>

                <div class="card">
                    <div class="col-12 d-flex justify-content-end mt-3">
                        <button type="button" id="btn_add" class="btn btn-outline-primary"><i class="fa fa-plus"></i>
                            Tambah SubBagian</button>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%">
                                <thead>
                                    <tr class="text-center">
                                        <th>Aksi</th>
                                        <th>Nama Sub Bagian</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    @foreach ($data['section_divisions'] as $item)
                                        <tr>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-danger remove"><i
                                                        class="fas fa-trash mr-2"></i> Hapus</button>
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="sub_name[]"
                                                    placeholder="Masukkan Opsi Jawaban" value="{{ $item->name }}"
                                                    required>
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="sub_description[]"
                                                    placeholder="Masukkan Sub Bagian" value="{{ $item->description }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-end mt-3">
                    <a href="{{ route('division.index') }}" class="btn btn-warning me-2">Kembali</a>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('js_after')
    <script>
        $(() => {
            initQuestionnaireOption();
        })

        // Option Question
        function initQuestionnaireOption() {
            let rowIndex = 0;

            $("#btn_add").click(function() {
                $("#tbody").append(`<tr id="row${++rowIndex}">
            <td class="text-center">
            <button type="button" class="btn btn-danger remove"><i class="fas fa-trash mr-2"></i> Hapus</button>
            </td>
            <td>
            <input type="hidden" name="section_division[]" value="">
            <input class="form-control" type="text" name="sub_name[]" placeholder="Masukkan Opsi Jawaban" required>
            </td>
            <td>
            <input class="form-control" type="text" name="sub_description[]" placeholder="Masukkan Sub Bagian">
            </td>
            </tr>`);
            });

            $("#tbody").on('click', '.remove', function() {
                let child = $(this).closest('tr').nextAll();

                child.each(function() {
                    let id = $(this).attr('id');
                    let dig = parseInt(id.substring(1));
                    $(this).attr('id', `row${dig - 1}`);
                });

                $(this).closest('tr').remove();
                rowIndex--;


            });
        }
    </script>
@endsection
