@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">GUIDE WEBSITE TIRTA MUSI INTERNSHIP</h4>
        </div>

        <div class="card-body">
            <ul class="nav" >
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#daftar">Panduan Pendaftaran dan Pengajuan Magang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#panduan">Panduan Pegguanaan Aplikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tatib">Tata Tertib Magang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kantor">Kantor Perumda Tirta Musi Palembang</a>
                </li>

            </ul>
        </div>
    </div>
</section>

<br id="daftar"><br>
    <h3 >Panduan Pendaftaran dan Pengajuan Magang </h3>
@endsection
@section('content')
<div class="page-heading">
<section id="groups">

    <div class="row match-height">
        <div class="col-12">
            <div class="card-group">
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="{{ asset('mazer-admin/assets/images/samples/1.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">1. Masuk ke laman Tirta Musi Internship</h4>
                            <p class="card-text" align="justify">
                                Silahkan kunjungi website www.tirtamusiinternship.com</p>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="{{ asset('mazer-admin/assets/images/samples/2.png') }}"
                            alt="Card image cap" />
                        <div class="card-body">
                            <h4 class="card-title">2. Login ke aplikasi Tirta Musi Internship</h4>
                            <p class="card-text" align="justify">
                                Daftarkan diri untuk memiliki akun pada aplikasi, jika sudah mempunyai akun silahkan login ke aplikasi
                            </p>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="{{ asset('mazer-admin/assets/images/samples/3.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">3. Klik Menu Data dan Pengajuan Magang</h4>
                            <p class="card-text" align="justify">
                                Isi data diri pada Data siswa/siswi dengan menyertakan file pengajuan magang (pendaftaran bersifat individu)
                            </p>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="{{ asset('mazer-admin/assets/images/samples/4.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">4. Cek status magang secara berkala</h4>
                            <p class="card-text" align="justify">
                                Ketika sudah melakukan pengajuan magang, tunggu status magang. Apabila diterima, Silahkan ikuti panduan yang tertera selanjutnya
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<br><br><br><br><br><br><br><br id="panduan"><br>

<h3 >Panduan Penggunaan Aplikasi</h3>
<br>
<section class="section">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img class="card-img-top img-fluid" src="{{ asset('mazer-admin/assets/images/samples/origami.jpg') }}" alt="Card image cap"
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
                    <img class="card-img-bottom img-fluid" src="{{ asset('mazer-admin/assets/images/samples/water.jpg') }}"
                        alt="Card image cap" style="height: 20rem; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>


<br><br><br><br id="tatib"><br>


<h3 >Tata Tertib Magang</h3>
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
                            <li>Hadir sesuai dengan tanggal pada surat balasan pukul 07.00 WIB di PDAM Tirta Musi Palembang.
                                (Jl. Rambutan Ujung No. 1 Bagian SDM) dikarenakan akan mengikuti apel pagi terlebih dahulu.
                                </li>
                                <br>
                                <li>Membawa hasil tes antigen, jika negatif maka dilanjutkan proses magang.</li>
                                <br>
                                <li>Magang/Kerja praktik dilaksanakan pada :</li>

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
    </div>
</section>

<br><br><br><br id="kantor"><br>


<h3>Kantor Perumda Tirta Musi Palembang</h3>
<br>
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class=col-md-6 col-12">
                            <h4 class="mb-4" data-aos="fade-up" data-aos-delay="600">Kantor Pusat Pelayanan Perumda Tirta Musi Palembang</h4>

                            <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i>Jl. Rambutan Ujung No.1, 30 Ilir, Kec. Ilir Barat II, Kota Palembang, Sumatera Selatan 30129</p>
    <!-- How to change your own map point
        1. Go to Google Maps
        2. Click on your location point
        3. Click "Share" and choose "Embed map" tab
        4. Copy only URL and paste it within the src="" field below
    -->
                            <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.363011488254!2d104.74323820000002!3d-2.9965410999999893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9e0286a1675f%3A0x8aaf7acd0bf7d8d5!2sPerumda%20Tirta%20Musi!5e0!3m2!1sen!2sid!4v1685076852276!5m2!1sen!2sid" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                           </div>
                           <br>
                           <img src="{{ asset('landing_page/images/team/tirta1.jpg') }}" alt="Tirta Musi" width="450px" data-aos="fade-up" data-aos-delay="200">
                           <br> <br>
                           <img src="{{ asset('landing_page/images/tirta3.jpg') }}" alt="Tirta Musi" width="450px" data-aos="fade-up" data-aos-delay="200">
                        </div>

                        <div class="col-md-6 col-12">
                            <h4 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">9 Kantor Cabang Unit Pelayanan Perumda Tirta Musi Palembang</h4>

                            <h5 ><b>Unit Pelayanan Rambutan</b></h5>
                                <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a href="https://goo.gl/maps/SyUN7q4m9iEJrfUz9">Jl. Rambutan Ujung No.01, Kel. 32 Ilir Kec. Ilir Barat II</a></p>

                                <br>
                                <h5 ><b>Unit Pelayanan KM. IV</b></h5>
                                <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a href="https://goo.gl/maps/Vqz2Eu3sWk8oyFxn7">Jl. Jendral Sudirman Kel. 20 Ilir Kec. Ilir Timur I</a></p>

                                <br>
                                <h5 ><b>Unit Pelayanan 3 Ilir</b></h5>
                                <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a href="https://goo.gl/maps/hfMenAVe8RsVUhGw6">Jl. Yos Sudarso Komp. Penyaringan No. 01 Kel. 3 Ilir Kec. Ilir Timur II</a></p>

                                <br>
                                <h5 ><b>Unit Pelayanan Sako Kenten</b></h5>
                                <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a href="https://goo.gl/maps/hBTbCzmdJ6oURaGC7">Jl. Musi Raya Simpang Lekipali No. 186 Kel. Suka Maju Kec. Sako</a></p>

                                <br>
                                <h5 ><b>Unit Pelayanan Seberang Ulu II</b></h5>
                                <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a href="https://goo.gl/maps/YWRsWAU3V6JkkEkd9">Jl. Mayjen. H.M. Ryacudu No.12 Kel. 7 Ulu Kec. Seberang Ulu I</a></p>

                                <br>
                                <h5 ><b>Unit Pelayanan Kalidoni</b></h5>
                                <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a href="https://goo.gl/maps/e7Kah4NEXo3eYGqx6">Jl. Residen Abdul Rozak No.01 Kel. Kalidoni Kec. Kalidoni</a></p>

                                <br>
                                <h5 ><b>Unit Pelayanan Karang Anyar</b></h5>
                                <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a href="https://goo.gl/maps/NZ7SCJBnQiN3emcN8">Jl. Alamsyah Ratu Prawiranegara No. 591A Kel. Karang Jaya Kec. Gandus</a></p>

                                <br>
                                <h5 ><b>Unit Pelayanan Alang-Alang Lebar</b></h5>
                                <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a href="https://goo.gl/maps/sp3NYro1EagJqyCS9">Jl. Soekarno Hatta Kel. Karya Baru Kec. Alang-Alang Lebar</a></p>

                                <br>
                                <h5 ><b>Unit Pelayanan Seberang Ulu I</b></h5>
                                <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a href="https://goo.gl/maps/oxCRoDVAZmAVL2Xv5">Jl. Ki Merogan Kel. Ogan Baru Kec. Kertapati</a></p>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('js_after')
@endsection
