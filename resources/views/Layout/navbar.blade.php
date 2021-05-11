@section('sidebar-header')
    <img src="{{asset('assets/img/logo3.png')}}" class="rounded-circle text-center" width="50px" style="margin-right: 15px;">
    <label class="user">
        {{$users->name}}
        <br>
        <small>{{$users->level}}</small>
    </label>

@endsection

@section('navbar')
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container">
                    <!-- <button class="btn btn-primary text-primary" id="menu-toggle">Menu</button> -->
                    <div type="button" id="menu-toggle" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{$users->name}}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <br>
                                    <div class="text-center">
                                        <img class="img-profile rounded-circle text-center" src="{{asset('assets/img/logo3.png')}}" width="50px">
                                    </div>

                                    <h5 class="dropdown-header text-center">{{$users->name}}</h5>
                                    <h6 class="dropdown-header text-center" style="font-weight: bold;">{{$users->level}}</h6>

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
@endsection