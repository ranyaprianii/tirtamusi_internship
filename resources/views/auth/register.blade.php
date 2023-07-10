<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Tirta Musi Internship</title>
    <link rel="stylesheet" href="{{ asset('mazer-admin/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-admin/assets/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer-admin/assets/images/tirtamusi.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer-admin/assets/images/tirtamusi.png') }}" type="image/png">

    <style>
        /* Responsive adjustments */

        /* Small devices (landscape phones) */
        @media (max-width: 576px) {
            .vh-120 {
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
            .vh-120 {
                height: auto;
                padding-top: 70px;
                padding-bottom: 70px;
            }
        }

        /* Large devices (desktops) */
        @media (min-width: 768px) {
            .vh-120 {
                height: 100vh;
            }
        }
    </style>
</head>

<body>
    <div id="auth">
        {{-- Error Message --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <section class="vh-120" style="background-color: #435EBE;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register Tirta Musi Internship</p>
                                        <form class="mx-1 mx-md-4" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" class="form-control form-control-xl"
                                                        placeholder="Email" name="email" value="{{ old('email') }}">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" class="form-control form-control-xl"
                                                        placeholder="Name" name="name" value="{{ old('name') }}">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" class="form-control form-control-xl"
                                                        placeholder="Password" name="password" value="{{ old('password') }}">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" class="form-control form-control-xl"
                                                        placeholder="Confirm Password" name="password_confirmation"
                                                        value="{{ old('password_confirmation') }}">
                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3"
                                                type="submit">Register</button>
                                        </form>
                                        <hr>
                                        <div class="">
                                            <p class="text-gray-600" align="center">Already have an account? <a
                                                    href="{{ route('login') }}" class="font-bold">Login</a></p>
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
