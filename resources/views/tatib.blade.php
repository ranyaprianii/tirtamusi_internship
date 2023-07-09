@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')

    <h3>Panduan Pendaftaran dan Pengajuan Magang </h3>
@endsection


@section('content')
    <div class="page-heading">
        <section id="groups">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card-group">
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid"
                                    src="{{ asset('mazer-admin/assets/images/samples/1.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">1. Masuk ke laman Tirta Musi Internship</h4>
                                    <p class="card-text" align="justify">
                                        Silahkan kunjungi website www.tirtamusiinternship.com</p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid"
                                    src="{{ asset('mazer-admin/assets/images/samples/2.png') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h4 class="card-title">2. Login ke aplikasi Tirta Musi Internship</h4>
                                    <p class="card-text" align="justify">
                                        Daftarkan diri untuk memiliki akun pada aplikasi, jika sudah mempunyai akun silahkan
                                        login ke aplikasi
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid"
                                    src="{{ asset('mazer-admin/assets/images/samples/3.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">3. Klik Menu Data dan Pengajuan Magang</h4>
                                    <p class="card-text" align="justify">
                                        Isi data diri pada Data siswa/siswi dengan menyertakan file pengajuan magang
                                        (pendaftaran bersifat individu)
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid"
                                    src="{{ asset('mazer-admin/assets/images/samples/4.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">4. Cek status magang secara berkala</h4>
                                    <p class="card-text" align="justify">
                                        Ketika sudah melakukan pengajuan magang, tunggu status magang. Apabila diterima,
                                        Silahkan ikuti panduan yang tertera selanjutnya
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
