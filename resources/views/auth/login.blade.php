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
</head>

<body>
    <div id="auth">

{{-- <div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">

                <a href="index.html"><img src="{{ asset('mazer-admin/assets/images/logo1.png') }}" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-xl" placeholder="Masukkan Username">

                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control form-control-xl" placeholder="Masukkan Password">

                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Keep me logged in
                    </label>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Log in</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="font-bold">Sign
                        up</a>.</p>
                <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div> --}}

        <section class="vh-100" style="background-color: #435EBE;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login Tirta Musi Internship </p>

                  <form class="mx-1 mx-md-4" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-xl" placeholder="Masukkan Username">

                        @error('email')
                        <span class="text-danger">{{ $message }}</span>

                        @enderror


                      </div>
                    </div>


                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control form-control-xl" placeholder="Masukkan Password">

                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                      </div>
                    </div>


                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                      <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>

                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Log in</button>
            </form>
            <div class="">
                <p class="text-gray-600" align="center">Don't have an account? <a href="{{ route('register') }}" class="font-bold">Sign
                        up</a>.</p>
                <p ><a class="font-bold" href="auth-forgot-password.html" >Forgot password?</a></p>
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
