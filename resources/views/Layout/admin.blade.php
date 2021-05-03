<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link href=" https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>Sistem Akreditasi Program Studi | Universitas Negeri Semarang</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!--fontawesome-->
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="font/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets/style1.css')}}">

</head>

<body>
    <div id="wrapper">
        <div class="overlay"></div>
        <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
            <div class="simplebar-content" style="padding: 0px;">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">SIAPS FMIPA</span>
                </a>
                <ul class="navbar-nav align-self-stretch">
                    @foreach($users as $items)
                    <li class="sidebar-header">
                        {{$items->name}}
                    </li>
                    @endforeach
                    <li class="has-sub">
                        <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse">
                            <i class="flaticon-user"></i> Dashboard
                        </a>
                        <div class="collapse menu mega-dropdown" id="collapseExample2">
                            <div class="dropmenu" aria-labelledby="navbarDropdown">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-lg-12 px-2">
                                            <div class="submenu-box">
                                                <ul class="list-unstyled m-0">
                                                    <li><a href="{{route('admin-home')}}">Home</a></li>
                                                    <li><a href="">Penetapan Periode</a></li>
                                                    <li><a href="">Plotting Evaluator Internal</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- DIMULAI DARI SINI YA BANG -->
                    <li class="has-sub">
                        <a class="nav-link collapsed text-left" href="#collapseExample3" role="button" data-toggle="collapse">
                            <i class="flaticon-user"></i> Master
                        </a>
                        <div class="collapse menu mega-dropdown" id="collapseExample3">
                            <div class="dropmenu" aria-labelledby="navbarDropdown">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-lg-12 px-2">
                                            <div class="submenu-box">
                                                <ul class="list-unstyled m-0">
                                                    <li><a href="">Isi Master 1</a></li>
                                                    <li><a href="">Isi Master 2</a></li>
                                                    <li><a href="">Isi Master 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="has-sub">
                        <a class="nav-link collapsed text-left" href="#collapseExample4" role="button" data-toggle="collapse">
                            <i class="flaticon-user"></i> Manajemen
                        </a>
                        <div class="collapse menu mega-dropdown" id="collapseExample4">
                            <div class="dropmenu" aria-labelledby="navbarDropdown">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-lg-12 px-2">
                                            <div class="submenu-box">
                                                <ul class="list-unstyled m-0">
                                                    <li><a href="">Isi Manajemen 1</a></li>
                                                    <li><a href="">Isi Manajemen 2</a></li>
                                                    <li><a href="">Isi Manajemen 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- page konten isinya -->
        <div id="page-content-wrapper">
            <div id="content">
                <div class="container-fluid p-0 px-lg-0 px-md-0">
                    <nav class="navbar navbar-expand navbar-primary my-navbar">
                        <div type="button" id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown  d-sm-none">
                                <div class="dropdown-menu dropdown-menu-right p-3">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Navbar user info -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                                    <span class="mr-2 d-none d-lg-inline text-white-600 medium">Habib Taqiyullah</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="drop_prof">
                                    <img class="img-profile rounded-circle" src="{{asset('assets/img/logo3.png')}}">
                                    <div class="adm">
                                        @foreach ($users as $item)
                                        <h5 class="dropdown-header">M. Habib Taqiyullah</h5>
                                        <h6 class="dropdown-header">{{ $item->level }}</h6>
                                        @endforeach
                                    </div>
                                    <a href="{{route('logout')}}" type="button" class="btn btn-danger btn-sm right" id="logout">Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>

                    <!-- Mulai bagian isi SIAPS -->
                    <div class="container-fluid px-lg-4">
                        <div class="main__title">
                            <img src="img/hello.svg" alt="" />
                            <div class="main__greeting">
                                <h1>Hello!</h1>
                                <p>Selamat datang, Habib Taqiyullah S. Pd., M. Pd.</p>
                            </div>
                        </div>

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
    <script>
        $('#bar').click(function() {
            $(this).toggleClass('open');
            $('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled');
        });
    </script>
</body>

</html>