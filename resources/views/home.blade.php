@extends('layouts.app')

@section('content-header')
    <h3>Dashboard Tirta Musi Internship</h3>
@endsection

@section('content')
    @hasanyrole('Admin|Manager')
        <section class="row">
            <div class="col-12 ">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Akun Dibuat</h6>
                                        <a href="{{ route('user.index') }}">Selengkapnya</a>
                                        <h6 class="font-extrabold mb-0">{{ $totalUsers }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Sertifikat</h6>
                                        <a href="#">Selengkapnya</a>
                                        <h6 class="font-extrabold mb-0">183.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Laporan</h6>
                                        <a href="#">Selengkapnya</a>
                                        <h6 class="font-extrabold mb-0">80.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body py-4 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('mazer-admin/assets/images/faces/1.jpg') }}" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">User</h5>
                                        <a href="{{ route('logout') }}">Log out</a>
                                        <h6 class="text-muted mb-0">Admin</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endhasanyrole

    @role('Siswa/Mahasiswa')
        <section class="row">
            <div class="col-12 ">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Data Pengajuan Magang</h6>
                                        <a href="{{ route('apprentince.index') }}">Selengkapnya</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Cetak Sertifikat</h6>
                                        <a href="#">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Cetak Laporan</h6>
                                        <a href="#">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body py-4 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('mazer-admin/assets/images/faces/1.jpg') }}" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">User</h5>
                                        <a href="{{ route('logout') }}">Log out</a>
                                        <h6 class="text-muted mb-0">Admin</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Penggunaan Aplikasi</h3>
            <br>
            <section class="section">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid"
                                    src="{{ asset('mazer-admin/assets/images/samples/origami.jpg') }}" alt="Card image cap"
                                    style="height: 20rem" />
                                <div class="card-body">
                                    <h4 class="card-title">Top Image Cap</h4>
                                    <p class="card-text">
                                        Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut
                                        pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate
                                        bar
                                        chocolate tart dragée.
                                    </p>
                                    <p class="card-text">
                                        Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.
                                    </p>
                                    <button class="btn btn-primary block">Update now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Bottom Image Cap</h4>
                                    <p class="card-text">
                                        Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut
                                        pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate
                                        bar
                                        chocolate tart dragée.
                                    </p>
                                    <p class="card-text">
                                        Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar
                                        muffin.
                                    </p>
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                                <img class="card-img-bottom img-fluid"
                                    src="{{ asset('mazer-admin/assets/images/samples/water.jpg') }}" alt="Card image cap"
                                    style="height: 20rem; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <h3>Tata Tertib Magang</h3>
            <br>
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Tata Tertib Magang di Perumda Tirta Musi Palembang</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ol>
                                            <li>Hadir sesuai dengan tanggal pada surat balasan pukul 07.00 WIB di PDAM Tirta Musi
                                                Palembang.
                                                (Jl. Rambutan Ujung No. 1 Bagian SDM) dikarenakan akan mengikuti apel pagi terlebih
                                                dahulu.
                                            </li>
                                            <br>
                                            <li>Membawa hasil tes antigen, jika negatif maka dilanjutkan proses magang.</li>
                                            <br>
                                            <li>Magang/Kerja praktik dilaksanakan pada :</li>

                                            <ul>
                                                <li>Senin - Kamis : 07.30 - 12.00 WIB.</li>
                                                <li>Jum'at : 07.30 - 11.30 WIB.</li>
                                            </ul>
                                            <br>
                                            <li>Seragam :</li>

                                        </ol>

                                        <ul>
                                            <li>Perempuan : Rok dasar hitam, baju kemeja (bebas pantas) / seragam sekolah / seragam
                                                kampus, almamater dan sepatu pantofel / flatshoes / sepatu sekolah berwarna hitam.
                                            </li>
                                            <br>
                                            <li>Laki - laki : Sepan dasar hitam, baju kemeja (bebas pantas) / seragam sekolah /
                                                seragam kampus, almamater dan sepatu pantofel / sepatu sekolah berwarna hitam.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                                    data-bs-slide-to="0" class="active" aria-current="true"
                                                    aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                                    data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ asset('landing_page/images/team/tirta1.jpg') }}"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('landing_page/images/tirta2.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ asset('landing_page/images/tirta3.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>



                                    </div>

                                </div>
                                <div class="col-12 d-flex justify-content-end mt-3">
                                    <a href="{{ route('apprentince.index') }}" class="btn btn-primary me-3 mb-1">Ke User
                                        Profile</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <br><br><br><br id="kantor"><br>
        </section>
    @endrole

    @role('Calon Magang')
        <section class="row">
            <div class="col-12 ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Informasi</h4>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endrole

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Kantor Pusat Pelayanan Perumda Tirta Musi Palembang</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p data-aos="fade-up" data-aos-delay="800"><i class="bi bi-geo-alt-fill"></i>Jl.
                                    Rambutan Ujung No.1, 30 Ilir, Kec. Ilir Barat II, Kota Palembang, Sumatera
                                    Selatan 30129</p>

                                <div class="googlemaps">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3630114992493!2d104.74066327492194!3d-2.9965410969794744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9e0286a1675f%3A0x8aaf7acd0bf7d8d5!2sPerumda%20Tirta%20Musi!5e0!3m2!1sen!2sid!4v1686469065639!5m2!1sen!2sid"
                                        width="500" height="350" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <center><img src="{{ asset('mazer-admin/assets/images/tirtamusi.png') }}" alt="TirtaMusi"
                                        width="40%"></center>
                                <center><img src="{{ asset('mazer-admin/assets/images/logo1.png') }}" alt="TirtaMusi"
                                        width="40%"></center>
                                <br>
                                <p align="justify">
                                    Perumda Tirta Musi Palembang menyelenggarkan Program Magang/Kerja Praktik kepada
                                    para siswa/siswi SMK maupun Mahasiswa/ Mahasiswi (seluruh jurusan) pada
                                    perguruan tinggi seluruh Indonesia. Hal ini bertujuan untuk memberikan
                                    pengalaman kerja nyata serta membangun kompetensi, memperluas wawasan dan
                                    mendapatkan pengalaman nyata di dunia kerja.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
