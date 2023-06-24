@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Dashboard Tirta Musi Internship</h3>
@endsection

@section('content')
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
                                    <h6 class="text-muted font-semibold">Magang Aktif</h6>
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
                                    <h6 class="text-muted font-semibold">Magang Selesai</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
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
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Sertifikat</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                            <p data-aos="fade-up" data-aos-delay="800"><i class="bi bi-geo-alt-fill"></i>Jl. Rambutan Ujung No.1, 30 Ilir, Kec. Ilir Barat II, Kota Palembang, Sumatera Selatan 30129</p>

                                            <div class="googlemaps">
                                                <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3630114992493!2d104.74066327492194!3d-2.9965410969794744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9e0286a1675f%3A0x8aaf7acd0bf7d8d5!2sPerumda%20Tirta%20Musi!5e0!3m2!1sen!2sid!4v1686469065639!5m2!1sen!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                                <center><img src="{{ asset('mazer-admin/assets/images/tirtamusi.png') }}" alt="TirtaMusi" width="40%"></center>
                                                <center><img src="{{ asset('mazer-admin/assets/images/logo1.png') }}" alt="TirtaMusi" width="40%"></center>
                                                <br>
                                                <p align="justify">
                                                    Perumda Tirta Musi Palembang menyelenggarkan Program Magang/Kerja Praktik kepada para siswa/siswi SMK maupun Mahasiswa/ Mahasiswi (seluruh jurusan) pada perguruan tinggi seluruh Indonesia. Hal ini bertujuan untuk memberikan pengalaman kerja nyata serta membangun kompetensi, memperluas wawasan dan mendapatkan pengalaman nyata di dunia kerja.
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>



    </section>
@endsection

@section('js_after')
@endsection
