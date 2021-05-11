<!DOCTYPE html>
<html lang="en">

<head>

    <title>Home | SIAPS FMIPA</title>

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style5.css')}}">

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
                        <img src="assets/img/habib.png" class="rounded-circle text-center" width="50px" style="margin-right: 15px;">
                        <label class="user">Habib Taqiyullah</label>
                    </li>

                    <li class="has-sub"> 
                        <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse" >
                            <i class="flaticon-user ion-md-apps lead mr-2" style="color: white;"></i>Dashboard
                        </a>
                        <div class="collapse menu mega-dropdown" id="collapseExample2">
                            <div class="dropmenu" aria-labelledby="navbarDropdown">
                                <div class="container-fluid ">
                                    <div class="row">
                                        <div class="col-lg-12 px-2">
                                            <div class="submenu-box"> 
                                                <ul class="list-unstyled m-0">
                                                    <li><a href="">Home</a></li>
                                                    <li><a href="">Penugasan</a></li>
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
                        <a class="nav-link collapsed text-left" href="#collapseExample3" role="button" data-toggle="collapse" >
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
                        <a class="nav-link collapsed text-left" href="#collapseExample4" role="button" data-toggle="collapse" >
                            <i class="flaticon-user ion-md-settings lead mr-2" style="color: white;"></i>   Manajemen
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container">
                    <!-- <button class="btn btn-primary text-primary" id="menu-toggle">Menu</button> -->
                    <div type="button"  id="menu-toggle" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Habib Taqiyullah
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <br>
                                <div class="text-center">
                                    <img class="img-profile rounded-circle text-center" src="assets/img/habib.png" width="50px">
                                </div>
                                <h5 class="dropdown-header text-center">Habib Taqiyullah</h5>
                                <h6 class="dropdown-header text-center" style="font-weight: bold;">Evaluator</h6>
                                <div class="dropdown-divider"></div>
                                <div class="text-center">
                                <a href="{{route('logout')}}" type="button" class="btn btn-danger btn-sm right" id="logout">Log Out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
  </div>

  <!-- Bootstrap y JQuery -->
  <script src="assets/js/jquery-3.5.1.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Abrir / cerrar menu -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#content-wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>