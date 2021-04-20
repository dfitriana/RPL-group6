<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/login.css')}}">
    <title>SIAPS Login</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary fixed-top">
        <a class="navbar-brand">
            SIAPS FMIPA
        </a>
        <ul class="nav navbar-nav navbar-right"">
            <li><a href=" #">Login</a></li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="card card-login">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="padding bg-primary text-center align-items-center d-flex">
                            <div id="particles-js"></div>
                            <div class="pict"></div>
                            <div class="w-100">
                                <div class="logo mb-4">
                                    <img src="{{ asset('assets/img/unneslogo.png')}}" alt="Unnes Logo" class="img-fluid">
                                </div>
                                <br><br>
                                <h4 class="text-light mb-2">Selamat Datang!</h4>
                                <p class="lead text-light">Sistem Akreditasi Program Studi FMIPA</p>
                                <button class="btn btn-block btn-icon btn-icon-google mb-3">
                                    Login With Google
                                </button>
                            </div>

                            <div class="help-links">
                                <p class="lead text-light">Universitas Negeri Semarang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="padding">
                            <h2>Log In</h2><br><br>
                            <form action="{{route('postlogin')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" tabindex="1">
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="d-block" for="password">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" tabindex="2">
                                    @error('password')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group text-right">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                    @error('g-recaptcha-response')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <br>
                                    <div class="float-left mt-2">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <button class="btn btn-primary" tabindex="3">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/particles.js')}}"></script>
    <script>
        particlesJS.load('particles-js', 'particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });
    </script>
</body>

</html>