@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
    <h3>Informasi Untuk Siswa/Mahasiswa</h3>
@endsection

@section('content')
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Tata Tertib Magang</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                           <ol>
                            <li>Hadir sesuai dengan tanggal pada surat balasan pukul 07.00 WIB di PDAM Tirta Musi Palembang.
                                (Jl. Rambutan Ujung No. 1 Bagian SDM) dikarenakan akan mengikuti apel pagi terlebih dahulu.
                                </li>
                                <br>
                                <li>Membawa hasil tes antigen, jika negatif maka dilanjutkan proses magang.</li>
                                <br>
                                <li>Kerja praktik dilaksanakan pada :</li>

                                <ul>
                                    <li>Senin - Kamis :  07.30 - 12.00 WIB.</li>
                                   <li>Jum'at : 07.30 - 11.30 WIB.</li>
                                </ul>
                                <br>
                                <li>Seragam :</li>

                            </ol>

                            <ul>
                                <li>Perempuan : Rok dasar hitam, baju kemeja (bebas pantas) / seragam sekolah / seragam kampus, almamater dan sepatu pantofel / flatshoes / sepatu sekolah berwarna hitam.</li>
                                <br>
                                <li>Laki - laki : Sepan dasar hitam, baju kemeja (bebas pantas) / seragam sekolah / seragam kampus, almamater dan sepatu pantofel / sepatu sekolah berwarna hitam.</li>
                            </ul>
                        </div>
                        <div class="col-md-6" >

                              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="{{ asset('landing_page/images/team/tirta1.jpg') }}" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="{{ asset('landing_page/images/tirta2.jpg') }}" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="{{ asset('landing_page/images/tirta3.jpg') }}" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div
                        </div>

                    </div>

                </div>
                <div class="col-12 d-flex justify-content-end mt-3">
                    <a href="{{ route('apprentince.index') }}"
                        class="btn btn-primary me-3 mb-1">Ke User Profile</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js_after')
@endsection
