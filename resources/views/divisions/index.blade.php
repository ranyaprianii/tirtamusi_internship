@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Data Bagian</h3>
@endsection

@section('content')
        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Data Bagian</h4>
                    </div>
                    <a class="text-end btn btn-sm btn-outline-info" href="{{ route('division.create') }}"><i
                            class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="data-table" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Nama Divisi</th>
                                    <th>Deskripsi</th>
                                    <th>Diinput Pada</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('js_after')
    <script>
        $(document).ready(function() {
            getDatatable();
        });

        let data_table = "";

        function getDatatable() {
            data_table = $("#data-table").DataTable({
                ajax: {
                    url: "{{ route('division.datatable') }}",
                },
                serverSide: true,
                destroy: true,
                order: [
                    [3, 'desc']
                ],
                columns: [{
                        "data": null,
                        "sortable": false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        name: 'action',
                        data: 'action'
                    },
                    {
                        name: 'name',
                        data: 'name'
                    },
                    {
                        name: 'description',
                        data: 'description'
                    },
                    {
                        name: 'created_at',
                        data: 'created_at'
                    },

                ],
            });
        }
    </script>
@endsection
