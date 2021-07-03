<!DOCTYPE html>
<html lang="en">

<head>

    <title>Home | SIAPS FMIPA</title>

    <!-- Bootstrap Css -->

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="{{asset('assets/style5.css')}}">
    <link rel="stylesheet" href="{{('assets/font/fontawesome-free-5.15.3-web/css/all.css')}}">
    <link rel="stylesheet" href="font/font/flaticon.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

</head>

<body>
    <div class="d-flex" id="content-wrapper">
        <!-- Sidebar -->
        <div id="sidebar-container" class="border-right" style="background-color: #007BFF;">
            <div class="logo">
                <h4 class="font-weight-bold mb-0">SIAPS FMIPA</h4>
            </div>
            <div class="menu list-group-flush">
                <ul class="navbar-nav align-self-stretch" id="sidebar">
                    <li class="sidebar-header">
                        @yield('sidebar-header')
                    </li>

                    <li class="has-sub">
                        <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse">
                            <i class="flaticon-user ion-md-apps lead mr-2" style="color: white;"></i>Dashboard
                        </a>
                        <div class="collapse menu mega-dropdown" id="collapseExample2">
                            <div class="dropmenu" aria-labelledby="navbarDropdown">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-lg-12 px-2">
                                            <div class="submenu-box">
                                                <ul class="list-unstyled m-0">
                                                    <li><a href="{{route('eva-home')}}">Home</a></li>
                                                    <li><a href="{{route('eva-penugasan')}}">Penugasan @if($users->unreadnotifications->count())
                                                            <span class="badge rounded-pill bg-danger">{{$users->unreadnotifications->count()}}</span>
                                                            @endif</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- DIMULAI DARI SINI YA -->
                    <li class="has-sub">
                        <a class="nav-link collapsed text-left" href="#collapseExample3" role="button" data-toggle="collapse">
                            <i class="flaticon-user ion-md-calendar lead mr-2" style="color: white;"></i>Data Akreditasi
                        </a>
                        <div class="collapse menu mega-dropdown" id="collapseExample3">
                            <div class="dropmenu" aria-labelledby="navbarDropdown">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-lg-12 px-2">
                                            <div class="submenu-box">
                                                <ul class="list-unstyled m-0">
                                                    <li><a href="">Isi Data Akreditasi 1</a></li>
                                                    <li><a href="">Isi Data Akreditasi 2</a></li>
                                                    <li><a href="">Isi Data Akreditasi 3</a></li>
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
                            <i class="flaticon-user ion-md-settings lead mr-2" style="color: white;"></i> Manajemen
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
        </div>
        <!-- Fin sidebar -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100 bg-light-blue">
            @yield('navbar')
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap y JQuery -->
    <script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/toastr.min.js')}}"></script>

    <!-- Abrir / cerrar menu -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#content-wrapper").toggleClass("toggled");
        });
    </script>

    @if(Session::has('message'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{!! Session::get('message') !!}");
    </script>
    @endif

    @if(Session::has('info'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{!! Session::get('info') !!}");
    </script>
    @endif


</body>

</html>