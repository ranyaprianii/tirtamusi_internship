@extends('layouts.app')

@section('css_after')
@endsection

@section('content-header')
@hasrole('Calon Magang')
    <h3>Panduan Pengajuan Magang </h3>

    <section class="section">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">

                        <div class="card-body">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('mazer-admin/assets/images/1.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('mazer-admin/assets/images/2.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('mazer-admin/assets/images/3.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h4 class="card-title">1. Masuk ke laman Tirta Musi Internship</h4>
                            <p class="card-text">
                                Silahkan kunjungi website www.tirtamusiinternship.com kemudian buat akun dengan cara
                                mengklik login pada bagian navbar. Pada menu login klik Sign Up lalu isi data email serta
                                password.
                            </p>
                            <hr>
                            <hr>
                            <p class="card-text">

                                Pastikan email yang diterakan merupakan email aktif yang digunakan serta password yang mudah
                                untuk diingat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">2. Login ke website Tirta Musi Internship</h4>
                            <p class="card-text">
                                Setelah mendaftarkan akun pada laman register, anda akan diarahkan pada Dashboard Tirta Musi
                                Internship.
                                Pada bagian Dashboard terdapat bagian sidebar untuk melakukan pengajuan magang.
                                Pengajuan magang dapat diajukan dengan mengklik tombol Pengajuan Magang.
                            </p>
                            <p class="card-text">
                                <b>*Pengajuan magang dilakukan secara individu.</b>
                            </p>
                            <br>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('mazer-admin/assets/images/4.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('mazer-admin/assets/images/5.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">

                        <div class="card-body">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('mazer-admin/assets/images/5.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('mazer-admin/assets/images/6.jpg') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h4 class="card-title">3. Klik Menu Pengajuan Magang</h4>
                            <p class="card-text">
                                Isi data diri lengkap dengan menyertakan file pengajuan magang
                                (pendaftaran bersifat individu)
                            </p>
                            <hr>
                            <hr>
                            <p class="card-text">
                                <b>*Khusus untuk siswa/mahasiswa yang mendaftar secara tim</b> (lebih dari satu dalam satu
                                instansi yang sama
                                dan dalam jangka waktu magang yang sama), hanya perwakilan tim yang dapat mendaftarkan akun
                                pengajuan magang.
                                Namun, pada bagian nama lengkap, harap mengisi nama-nama anggota tim (contoh: Rany, Andra,
                                Tania). Untuk data selain
                                nama, silakan mengisi data perwakilan pertama pada kolom nama lengkap yang telah diisikan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">4. Cek status magang secara berkala pada E-mail yang didaftarkan</h4>
                            <p class="card-text">
                                Setelah Anda mengajukan magang, harap periksa secara berkala email yang telah Anda
                                daftarkan. Jika pengajuan Anda diterima, Anda akan menerima surat balasan yang menyatakan
                                diterima, dan akun yang telah Anda daftarkan akan secara otomatis menjadi akun
                                Siswa/Mahasiswa magang. Selanjutnya, ikuti petunjuk yang tertera dalam surat balasan
                                dan informasi terbaru di Dashboard.

                            </p>
                            <hr>
                            <hr>
                            <p class="card-text">
                                Jika pengajuan magang Anda ditolak, Anda akan menerima surat penolakan melalui email
                                dan akun Anda akan otomatis terhapus.
                            </p>
                            <br>
                            <img class="card-img-bottom img-fluid" src="{{ asset('mazer-admin/assets/images/7.jpg') }}"
                                alt="Card image cap" style="height: 20rem; object-fit: cover;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endrole

@hasrole('Siswa/Mahasiswa')
    <h3>Panduan Pengisian Aktivitas Magang</h3>

    <section class="section">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">

                        <div class="card-body">
                            <img class="card-img-bottom img-fluid" src="{{ asset('mazer-admin/assets/images/8.jpg') }}"
                            alt="Card image cap" style="height: 20rem; object-fit: cover;">

                            <br><br>
                            <h4 class="card-title">1. Login akun yang sudah dibuat</h4>
                            <p class="card-text">
                                Ketika pengajuan magang sudah disetujui, silahkan login ke aplikasi kembali
                                sesuai arahan dari pihak SDM Perumda Tirta Musi Palembang.
                            </p>
                            <hr>
                            <hr>
                            <p class="card-text">

                               Ketika sudah login, anda akan diarahkan pada halaman Dashboard Siswa/Mahasiswa
                               magang.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">2. Ikuti Panduan Pengisian Aplikasi Magang</h4>
                            <p class="card-text">
                                Setelah berada di halaman Dashboard, sebelum pengisian aktivitas magang, bacalah
                                panduan pengisian aktivitas magang terlebih dahulu.
                            </p>
                            <p class="card-text">
                                Diharapkan siswa/mahasiswa magang mengikuti arahan panduan pengisian aktivitas magang. Apabila
                                ada yang tidak jelas, silahkan tanyakan ke bagian SDM Perumda Tirta Musi Palembang.
                            </p>
                            <br>
                            <img class="card-img-bottom img-fluid" src="{{ asset('mazer-admin/assets/images/9.jpg') }}"
                            alt="Card image cap" style="height: 20rem; object-fit: cover;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">

                        <div class="card-body">
                            <img class="card-img-bottom img-fluid" src="{{ asset('mazer-admin/assets/images/10.jpg') }}"
                            alt="Card image cap" style="height: 20rem; object-fit: cover;">
                            <br><br>
                            <h4 class="card-title">3. Pengisian aktivitas magang</h4>
                            <p class="card-text">
                                Pengisian aktivitas magang dilakukan secara individu
                            </p>
                            <hr>
                            <hr>
                            <p class="card-text">
                                1. Pengisian presensi. Silahkan isi presensi masuk ketika sudah berada di tempat magang. Jika sakit
                                atau izin, tetap isi presensi dengan memilih izin/sakit pada pilihan tertera. Surat izin/sakit dibawa
                                keesokan harinya ke bagian SDM. Setelah selesai magang,
                                isi presensi kembali pada bagain presensi keluar.
                                <br><br>
                                2. Pengisian Catatan Internship-desk. Silahkan isi catatan sesuai apa yang telah
                                dilakukan pada saat magang. Catatan diisi cukup 1 kali dalam 1 hari setiap harinya sampai dengan
                                waktu magang selesai.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">4. Penilaian Kinerja Magang oleh Manager</h4>
                            <p class="card-text">
                               Dihari terakhir magang, beritahu kepada manager (dimana Siswa/Mahasiswa magang)
                               untuk mengisi penilaian kinerja magang siswa/mahasiswa magang pada aplikasi Tirta Musi
                               Internship.

                            </p>
                            <hr>
                            <hr>
                            <p class="card-text">
                                Keesokan harinya, silahkan datang kembali ke bagian SDM Perumda Tirta Musi Palembang dengan
                                membawa Pas Foto berukuran 3x4 (latar merah) sebanyak 2 lembar.
                            </p>
                            <p class="card-text">
                               Cek secara berkala pada bagian sertifikat magang. Apabila sertifikat magang pada website
                               sudah dapat diunduh, silahkan datang kembali ke bagian SDM Perumda Tirta Musi Palembang
                               untuk mengambil hardfile sertifikat.
                            </p>

                            <img class="card-img-bottom img-fluid" src="{{ asset('mazer-admin/assets/images/11.jpg') }}"
                                alt="Card image cap" style="height: 20rem; object-fit: cover;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endrole

@hasrole('Manager')
    <h3>Panduan Pengisian Penilaian Sertifikat Magang</h3>

    <section class="section">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">

                        <div class="card-body">
                            <img class="card-img-bottom img-fluid" src="{{ asset('mazer-admin/assets/images/8.jpg') }}"
                            alt="Card image cap" style="height: 20rem; object-fit: cover;">

                            <br><br>
                            <h4 class="card-title">1. Login akun yang sudah dibuat</h4>
                            <p class="card-text">
                                Ketika pengajuan magang sudah disetujui, silahkan login ke aplikasi kembali
                                sesuai arahan dari pihak SDM Perumda Tirta Musi Palembang.
                            </p>
                            <hr>
                            <hr>
                            <p class="card-text">

                               Ketika sudah login, anda akan diarahkan pada halaman Dashboard Manager.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">2. Ikuti Panduan Pengisian Penialain Sertifikat Magang</h4>
                            <p class="card-text">
                                Setelah berada di halaman Dashboard, sebelum penialain sertifikat magang, bacalah
                                panduan pengisian penilaian sertifikat magang terlebih dahulu.
                            </p>
                            <p class="card-text">
                                Diharapkan manager mengikuti arahan panduan pengisian penilaian sertifikat magang. Apabila
                                ada yang tidak jelas, silahkan tanyakan ke bagian SDM Perumda Tirta Musi Palembang.
                            </p>
                            <br>
                            <img class="card-img-bottom img-fluid" src="{{ asset('mazer-admin/assets/images/9.jpg') }}"
                            alt="Card image cap" style="height: 20rem; object-fit: cover;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">

                        <div class="card-body">
                            <img class="card-img-bottom img-fluid" src="{{ asset('mazer-admin/assets/images/10.jpg') }}"
                            alt="Card image cap" style="height: 20rem; object-fit: cover;">
                            <br><br>
                            <h4 class="card-title">3. Lihat aktivitas magang sebagai bahan evaluasi penilaian</h4>
                            <p class="card-text">
                                Pengisian penilaian sertifikat magang dilakukan secara individu.
                            </p>
                            <hr>
                            <hr>
                            <p class="card-text">
                                1. Sebagai bahan evaluasi manager, diharapkan menilai siswa/mahasiswa magang dari presensi, ketepatan waktu presensi,
                                catatan harian, laporan, dan kegiatan sehari harinya siswa/mahasiswa magang selama berada di lingkungan
                                kantor Perumda Tirta Musi Palembang.
                                <br><br>
                                2. Pengisian penilaian sertifikat tersedia pada form tambah data dengan mancari nama siswa/mahasiswa yang akan di nilai.
                                Penilaian dengan index desimal harap menggunakan tanda titik (.) bukan (,) agar dapat dibaca oleh sistem.
                                Contoh 8.2
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">4. Sertifikat akan muncul ketika siswa/mahasiswa magang mengumpulkan laporan magang</h4>
                            <p class="card-text">
                               Dihari terakhir magang, beritahu kepada manager (dimana Siswa/Mahasiswa magang)
                               untuk mengisi penilaian kinerja magang siswa/mahasiswa magang pada aplikasi Tirta Musi
                               Internship.

                            </p>
                            <hr>
                            <hr>
                            <p class="card-text">
                                Keesokan harinya, silahkan datang kembali ke bagian SDM Perumda Tirta Musi Palembang dengan
                                membawa Pas Foto berukuran 3x4 (latar merah) sebanyak 2 lembar.
                            </p>
                            <p class="card-text">
                               Cek secara berkala pada bagian sertifikat magang. Apabila sertifikat magang pada website
                               sudah dapat diunduh, silahkan datang kembali ke bagian SDM Perumda Tirta Musi Palembang
                               untuk mengambil hardfile sertifikat.
                            </p>

                            <img class="card-img-bottom img-fluid" src="{{ asset('mazer-admin/assets/images/11.jpg') }}"
                                alt="Card image cap" style="height: 20rem; object-fit: cover;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endrole
@endsection



