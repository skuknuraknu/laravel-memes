<!-- Ini adalah halaman Signup -->
<!-- Halaman ini digunakan untuk mendaftarkan pengguna baru -->
<!-- Terdapat form untuk mengisi username, email, dan password -->
<!-- Jika terdapat error pada inputan, akan ditampilkan di bagian atas form -->
<!-- Terdapat tombol Sign Up dan tombol untuk sign up menggunakan akun sosial media -->
<!-- Terdapat link untuk kembali ke halaman Sign In jika sudah memiliki akun -->

<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" />

    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <style>
        .login-cover-img {
            background-image: url('https://wallpapercave.com/wp/wp4092753.jpg');
            background-position: center;
            background-size: cover;
            width: 100%;
            transform: skewX(-10deg);
        }
    </style>

    <title>Memesheetpost | Signup</title>
</head>

<body class="bg-white">

    <!--start wrapper-->
    <div class="wrapper">
        <div class="">
            <div class="row g-0 m-0">
                <div class="col-xl-6 col-lg-12">
                    <div class="login-cover-wrapper">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4>Sign Up</h4>
                                    <p>Sign Up untuk melanjutkan</p>
                                    @if ($errors)
                                        <span
                                            class="bg-danger px-4 py-1 text-white rounded mb-2 {{ $errors->all() ? 'visible' : 'invisible' }}">{{ $errors->first() }}</span>
                                    @endif
                                </div>
                                <form class="form-body row g-3" action="{{ route('signup.process') }}" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <label for="inputName" class="form-label">Username</label>
                                        <input name="username" type="text" class="form-control" id="inputName"
                                            value="{{ old('username') }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control" id="inputEmail"
                                            value="{{ old('email') }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword" class="form-label">Password</label>
                                        <input name="password" type="password" class="form-control" id="inputPassword">
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Sign Up</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="position-relative border-bottom my-3">
                                            <div class="position-absolute seperator translate-middle-y">or continue with
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div
                                            class="social-login d-flex flex-row align-items-center justify-content-center gap-2 my-2">
                                            <a href="javascript:;" class=""><img
                                                    src="assets/images/icons/facebook.png" alt=""></a>
                                            <a href="javascript:;" class=""><img
                                                    src="assets/images/icons/apple-black-logo.png" alt=""></a>
                                            <a href="javascript:;" class=""><img
                                                    src="assets/images/icons/google.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 text-center">
                                        <p class="mb-0">Sudah mempunyai akun? <a
                                                href="{{ route('signin.index') }}">Sign in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="position-fixed top-0 h-100 d-xl-block d-none login-cover-img">
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end wrapper-->
</body>

</html>
