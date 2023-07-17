<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="#"><img src="{{ asset('mazer-admin/assets/images/logo1.png') }}"
                            alt="TirtaMusi Internship"></a>
                </div>
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                        height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                        <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                opacity=".3"></path>
                            <g transform="translate(-210 -1)">
                                <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                <circle cx="220.5" cy="11.5" r="4"></circle>
                                <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                        <label class="form-check-label"></label>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                        </path>
                    </svg>
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>

        @hasrole('Admin')
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="{{ route('home') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>


                    <li class="sidebar-item active">
                        <a href="{{ route('user.index') }}" class='sidebar-link'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                <path
                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                            </svg>
                            <span>Kelola Pengguna</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Penempatan</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('division.index') }}">Bagian</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('unit.index') }}">Unit</a>
                            </li>
                        </ul>
                    </li>


                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <span>Data dan Pengajuan Magang</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('apprentince.index') }}">Data Siswa/Mahasiswa</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('apprentince.index_verification') }}">Konfirmasi Pengajuan Magang</a>
                            </li>
                        </ul>
                    </li>




                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-clipboard-data-fill"></i>
                            <span>Aktivitas Magang</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('attendance.index') }}">Presensi</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('daily_activity.index') }}">Catatan Harian</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('internship_file.index') }}">Laporan Magang</a>
                            </li>
                        </ul>
                    </li>



                    <li class="sidebar-item active">
                        <a href="{{ route('internship_score.index') }}" class='sidebar-link'>
                            <i class="bi bi-bookmark-fill"></i>
                            <span>Sertifikat Magang</span>
                        </a>

                    </li>

                    <li class="sidebar-item active">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                            class='sidebar-link'>
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Log Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        @endhasrole

        @hasrole('Manager')
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="{{ route('home') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item active">
                        <a href="{{ route('tatib') }}" class='sidebar-link'>
                            <i class="bi bi-journal-check"></i>
                            <span>Panduan Penilaian Sertifikat Magang</span>
                        </a>

                    </li>


                    <li class="sidebar-item">
                        <a href="{{ route('apprentince.index') }}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <span>Data Siswa/Mahasiswa</span>
                        </a>

                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-clipboard-data-fill"></i>
                            <span>Aktivitas Magang</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('attendance.index') }}">Presensi</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('daily_activity.index') }}">Catatan Harian</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('internship_file.index') }}">Laporan Magang</a>
                            </li>
                        </ul>
                    </li>


                    <li class="sidebar-item active">
                        <a href="{{ route('internship_score.index') }}" class='sidebar-link'>
                            <i class="bi bi-bookmark-fill"></i>
                            <span>Penilaian Sertifikat Magang</span>
                        </a>
                    </li>


                    <li class="sidebar-item active">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                            class='sidebar-link'>
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Log Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        @endhasrole

        @role('Siswa/Mahasiswa')
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="{{ route('home') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item active">
                        <a href="{{ route('tatib') }}" class='sidebar-link'>
                            <i class="bi bi-journal-check"></i>
                            <span>Panduan Pengisian Aktivitas Magang</span>
                        </a>

                    </li>

                    <li class="sidebar-item ">
                        <a href="{{ route('apprentince.index') }}" class='sidebar-link'>
                            <i class="bi bi-postcard-fill"></i>
                            <span>Data Siswa/Mahasiswa</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-clipboard-data-fill"></i>
                            <span>Aktivitas Magang</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('attendance.index') }}">Presensi</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('daily_activity.index') }}">Catatan Harian</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="{{ route('internship_file.index') }}">Laporan Magang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item ">
                        <a href="{{ route('internship_score.index') }}" class='sidebar-link'>
                            <i class="bi bi-bookmark-fill"></i>
                            <span>Sertifikat Magang</span>
                        </a>

                    </li>

                    <li class="sidebar-item active">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                            class='sidebar-link'>
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Log Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        @endrole

        @role('Calon Magang')
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="{{ route('home') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item active">
                        <a href="{{ route('tatib') }}" class='sidebar-link'>
                            <i class="bi bi-journal-check"></i>
                            <span>Panduan Pengajuan Magang</span>
                        </a>

                    </li>

                    <li class="sidebar-item">
                        <a href="{{ route('apprentince.index') }}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <span>Pengajuan Magang</span>
                        </a>

                    </li>

                    <li class="sidebar-item active">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                            class='sidebar-link'>
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Log Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        @endrole
    </div>
</div>
