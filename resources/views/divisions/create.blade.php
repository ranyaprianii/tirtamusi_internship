@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Tambah Data Bagian</h3>
@endsection


@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Bagian</h3>

            </div>



            <div class="card-body">
                <form action="{{ route('division.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-icon-left">
                                <label for="name">Nama Bagian</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Nama Bagian..."
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
                                <label for="address">Deskripsi</label>
                                <div class="position-relative">
                                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Deskripsi...">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-control-icon">
                                        <span class="fa-fw select-all fas"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <div class="col-12 d-flex justify-content-end mt-3">
                            <button type="button" id="btn_add" class="btn btn-outline-primary"><i class="fa fa-plus"></i>
                                Tambah Sub Bagian</button>
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
                                    <tbody id="tbody"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end mt-3">
                        <a href="{{ route('division.index') }}" class="btn btn-light-secondary me-3 mb-1">Kembali</a>
                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                    </div>
            </div>


            </form>


        </div>
        </div>
    </section>
@endsection

@section('js_after')
    <script>
        $(() => {
            initQuestionnaireOption();
            showOption();
            $("#option").hide();
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

        // Show Hide Option
        // function showOption() {
        //     let type = $('#type');
        //     $('#type').click(function() {
        //         if (type.val() == "Pilihan Ganda") {
        //             $("#option").show();
        //         } else {
        //             $("#tbody").empty();
        //             $("#option").hide();
        //         }
        //     })
        // }
    </script>
@endsection
