<!DOCTYPE html>
<html lang="en">

<head>


    <title>Perumda Tirta Musi</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('landing_page/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page/css/aos.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer-admin/assets/images/logo/tirtamusi.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer-admin/assets/images/logo/tirtamusi.png') }}" type="image/png">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('landing_page/css/tooplate-gymso-style.css') }}">


    <!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">TirtaMusi Internship</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Classes</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                    </li> --}}

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Office</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link smoothScroll">Login</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://web.facebook.com/perumdatirtamusi/?show_switched_toast=0&show_invite_to_follow=0&show_switched_tooltip=0&show_podcast_settings=0&show_community_review_changes=0&show_community_rollback=0&show_follower_visibility_disclosure=0"
                            class="fa fa-facebook"></a></li>
                    <li><a href="https://www.youtube.com/watch?v=hCsW42parTk" class="fa fa-youtube"></a></li>
                    <li><a href="https://www.instagram.com/perumdatirtamusi/" class="fa fa-instagram"></a></li>
                    <li><a href="https://wa.me/+628117888282" class="fa fa-whatsapp"></a></li>
                </ul>
            </div>

        </div>
    </nav>


    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

        <div class="bg-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">

                        <h6 data-aos="fade-up" data-aos-delay="300">Selamat Datang di Laman Resmi</h6>

                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Pendataan Magang (Internship
                            Management) Perumda Tirta Musi Palembang</h1>

                        <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">About
                            Internship</a>

                        <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up"
                            data-aos-delay="700">About Perumda Tirta Musi</a>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3" data-aos="fade-up">Perumda Tirta Musi Palembang</h2>
                    <p data-aos="fade-up" data-aos-delay="200" align="justify">
                        Perumda Tirta Musi Palembang menyelenggarkan Program Magang/Kerja Praktik kepada para
                        siswa/siswi SMK maupun Mahasiswa/ Mahasiswi (seluruh jurusan) pada perguruan tinggi seluruh
                        Indonesia. Hal ini bertujuan untuk memberikan pengalaman kerja nyata serta membangun kompetensi,
                        memperluas wawasan dan mendapatkan pengalaman nyata di dunia kerja.

                    </p>



                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                            <h2 class="mb-4" data-aos="fade-up" data-aos-delay="500">Internship hours</h2>

                            <h6 class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday-Thursday</h6>

                            <p data-aos="fade-up" data-aos-delay="800">8:00 AM - 12:00 PM</p>

                            <h6 class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Friday</h6>

                            <p data-aos="fade-up" data-aos-delay="800">8:00 AM - 11:30 PM</p>
                            <div class="d-flex flex-column justify-content-center col-12">
                                <p> Untuk melakukan pengajuan magang silahkan klik tombol di bawah ini.</p>
                                <a href="{{ route('register') }}" class="btn btn-primary me-3 mb-1">Pengajuan
                                    Magang</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="about section" id="about">
        <div class="container">
            <div class="row">

                <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300" style="color: black ">Perumda Tirta
                        Musi Palembang</h2>

                    <p data-aos="fade-up" data-aos-delay="400" align="justify">Perumda Tirta Musi Palembang adalah
                        sebuah perusahaan daerah yang beroperasi di Kota Palembang, Sumatera Selatan, Indonesia.
                        Perusahaan ini bertanggung jawab atas pengelolaan sumber daya air , termasuk pengelolaan sistem
                        penyediaan air minum dan pengelolaan drainase di kota Palembang, Sumatera Selatan.</p>

                    <p data-aos="fade-up" data-aos-delay="500" align="justify">Lebih dekat dengan <a rel="nofollow"
                            href="https://linktr.ee/TirtaMusi" target="_parent">Perumda Tirta Musi Palembang</a></p>

                </div>

                <div class="ml-lg-auto col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700"
                    style="margin-top: 35px">

                    <div class="team-thumb">
                        <img src="{{ asset('landing_page/images/tirta2.jpg') }}" class="img-fluid" alt="Trainer">


                    </div>
                </div>




            </div>
        </div>
    </section>





    <!-- CONTACT -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="row">


                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Kantor Pusat Pelayanan Perumda Tirta
                        Musi Palembang</h2>

                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i>Jl. Rambutan
                        Ujung No.1, 30 Ilir, Kec. Ilir Barat II, Kota Palembang, Sumatera Selatan 30129</p>
                    <!-- How to change your own map point
 1. Go to Google Maps
 2. Click on your location point
 3. Click "Share" and choose "Embed map" tab
 4. Copy only URL and paste it within the src="" field below
-->
                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.363011488254!2d104.74323820000002!3d-2.9965410999999893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b9e0286a1675f%3A0x8aaf7acd0bf7d8d5!2sPerumda%20Tirta%20Musi!5e0!3m2!1sen!2sid!4v1685076852276!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <br> <hr><br>
                    <img src="{{ asset('landing_page/images/team/tirta1.jpg') }}" alt="Tirta Musi" width="450px"
                        data-aos="fade-up" data-aos-delay="200">
                    <br> <br>

                </div>

                <div class="col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">9 Kantor Cabang Unit Pelayanan
                        Perumda Tirta Musi Palembang</h2>

                    <h5><b>Unit Pelayanan Rambutan</b></h5>
                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a
                            href="https://goo.gl/maps/SyUN7q4m9iEJrfUz9">Jl. Rambutan Ujung No.01, Kel. 32 Ilir Kec.
                            Ilir Barat II</a></p>

                    <br>
                    <h5><b>Unit Pelayanan KM. IV</b></h5>
                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a
                            href="https://goo.gl/maps/Vqz2Eu3sWk8oyFxn7">Jl. Jendral Sudirman Kel. 20 Ilir Kec. Ilir
                            Timur I</a></p>

                    <br>
                    <h5><b>Unit Pelayanan 3 Ilir</b></h5>
                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a
                            href="https://goo.gl/maps/hfMenAVe8RsVUhGw6">Jl. Yos Sudarso Komp. Penyaringan No. 01 Kel.
                            3 Ilir Kec. Ilir Timur II</a></p>

                    <br>
                    <h5><b>Unit Pelayanan Sako Kenten</b></h5>
                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a
                            href="https://goo.gl/maps/hBTbCzmdJ6oURaGC7">Jl. Musi Raya Simpang Lekipali No. 186 Kel.
                            Suka Maju Kec. Sako</a></p>

                    <br>
                    <h5><b>Unit Pelayanan Seberang Ulu II</b></h5>
                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a
                            href="https://goo.gl/maps/YWRsWAU3V6JkkEkd9">Jl. Mayjen. H.M. Ryacudu No.12 Kel. 7 Ulu Kec.
                            Seberang Ulu I</a></p>

                    <br>
                    <h5><b>Unit Pelayanan Kalidoni</b></h5>
                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a
                            href="https://goo.gl/maps/e7Kah4NEXo3eYGqx6">Jl. Residen Abdul Rozak No.01 Kel. Kalidoni
                            Kec. Kalidoni</a></p>

                    <br>
                    <h5><b>Unit Pelayanan Karang Anyar</b></h5>
                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a
                            href="https://goo.gl/maps/NZ7SCJBnQiN3emcN8">Jl. Alamsyah Ratu Prawiranegara No. 591A Kel.
                            Karang Jaya Kec. Gandus</a></p>

                    <br>
                    <h5><b>Unit Pelayanan Alang-Alang Lebar</b></h5>
                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a
                            href="https://goo.gl/maps/sp3NYro1EagJqyCS9">Jl. Soekarno Hatta Kel. Karya Baru Kec.
                            Alang-Alang Lebar</a></p>

                    <br>
                    <h5><b>Unit Pelayanan Seberang Ulu I</b></h5>
                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i><a
                            href="https://goo.gl/maps/oxCRoDVAZmAVL2Xv5">Jl. Ki Merogan Kel. Ogan Baru Kec.
                            Kertapati</a></p>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="d-flex justify-content-center mx-auto col-lg-12 col-md-7 col-12">
                    <p class="mr-4">
                    <p class="copyright-text">Copyright &copy; 2023 <a
                            href="https://linktr.ee/TirtaMusi">Perumda Tirta Musi Palembang</a></p>

                </div>

                <div class="d-flex justify-content-center mx-auto col-lg-12 col-md-7 col-12">
                    <p class="mr-4">

                        <i class="fa fa-instagram"></i>

                        <a href="https://www.instagram.com/perumdatirtamusi/">@perumdatirtamusi</a>
                    </p>

                    <p><i class="fa fa-whatsapp"><a href="https://wa.me/+628117888282">+628117888282</a></i></p>
                </div>

            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="{{ asset('landing_page/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/aos.js') }}"></script>
    <script src="{{ asset('landing_page/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('landing_page/js/custom.js') }}"></script>

</body>

</html>
