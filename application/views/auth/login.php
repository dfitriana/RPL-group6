<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>login.css">
    <title>SIAPS Log In</title>
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
                                    <img src="img/unneslogo.png" alt="Unnes Logo" class="img-fluid">
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
                            <form autocomplete="off">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" tabindex="1">
                                </div>
                                <div class="form-group">
                                    <label class="d-block" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" tabindex="2">
                                </div>
                                <div class="form-group text-right">
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

    <script src="<?= base_url('assets/') ?>js/particles.js"></script>
    <script>
        particlesJS.load('particles-js', 'particlesjs-config.json', function() {
            console.log('callback - particles.js config loaded');
        });
    </script>
</body>


</html>