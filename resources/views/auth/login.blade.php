<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Tirta musi Internship</title>
    <link rel="stylesheet" href="{{ asset('mazer-admin/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-admin/assets/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer-admin/assets/images/logo/tirtamusi.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer-admin/assets/images/logo/tirtamusi.png') }}" type="image/png">

    <style>
        /* Responsive adjustments */

        /* Small devices (landscape phones) */
        @media (max-width: 576px) {
            .vh-100 {
                height: auto;
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .order-2 {
                order: 1;
            }

            .order-1 {
                order: 2;
            }
        }

        /* Medium devices (tablets) */
        @media (min-width: 577px) and (max-width: 767px) {
            .vh-100 {
                height: auto;
                padding-top: 70px;
                padding-bottom: 70px;
            }
        }

        /* Large devices (desktops) */
        @media (min-width: 768px) {
            .vh-100 {
                height: 100vh;
            }
        }
    </style>
</head>

<body>
    <div id="auth">
        <section class="vh-100" style="background-color: #435EBE;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login Tirta Musi Internship</p>
                                        <form class="mx-1 mx-md-4" action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" name="name" value="{{ old('name') }}"
                                                        class="form-control form-control-xl"
                                                        placeholder="Masukkan Username">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" name="password" value="{{ old('password') }}"
                                                        class="form-control form-control-xl"
                                                        placeholder="Masukkan Password">
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3"
                                                type="submit">Log in</button>
                                        </form>
                                        <hr>
                                        <div>
                                            <p class="text-gray-600" align="center">Don't have an account? <a
                                                    href="{{ route('register') }}" class="font-bold">Sign up</a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                        <img src="{{ asset('landing_page/images/team/bgtirta.png') }}"
                                            class="img-fluid" alt="Sample image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
