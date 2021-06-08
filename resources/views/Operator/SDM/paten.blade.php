@extends('layout.operator')
@extends('layout.navbar')
@section('title','Sumber Daya Manusia: Paten | SIAPS FMIPA')
@section('content')
        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">SDM</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">Data Sumber Daya Manusia</p>
                        </div>
                    </div>

                    <!-- kolom -->
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-header" style="background-color: white;">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('profil-dosen')}}">Profil Dosen</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('dosen-pembimbing')}}">Dosen Pembimbing Utama TA</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-ewmp-dtps')}}">EWMP DTPS</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('dosen-tidaktetap')}}">Dosen Tidak Tetap</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('rekognisi')}}">Rekognisi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-penelitian')}}">Penelitian</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-pkm')}}">PKM</a> 
                                                <!-- belom -->
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('publikasi')}}">Publikasi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sitasi')}}">Sitasi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{route('paten')}}" id="isian">Paten</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('hki')}}">HKI</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('teknologi-tepat-guna')}}">Teknologi Tepat Guna</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('book-chapter')}}">Book Chapter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center" id="isian"></div>
                            </div>
                            
                            <div class="card-body">
                                <div class="alert" role="alert" id="note">
                                    <h3 style="color: white;">Catatan!</h3>
                                    <p>Data ini terakhir diambil dari Sistem Informasi Akademik, Sistem Informasi Kepegawaian, dan Sistem Informasi Penelitian Pengabdian: 05 November 2020.</p>
                                </div>
                                
                                <div class="alert alert-secondary" role="alert">
                                    Judul luaran penelitian atau judul luaran PkM yang dihasilkan oleh DTPS delam 3 tahun terakhir tersaji pada Tabel berikut.
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Data HKI Paten, Paten Sederhana</a>
                                    <form class="form-inline">
                                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </nav>

                                <table class="table v-middle">
                                    <div class="table-responsive-xl">
                                        <table class="table table-borderless table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Luaran Penelitian dan PKM</th>
                                                    <th scope="col">Tahun (YYYY)</th>
                                                    <th scope="col">Keterangan</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                    <th>I</th>
                                                    <th colspan="3">HKI: a) Paten, b)Paten Sederhana</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Alat Control Charging Baterai Solar Panel Sistem Grid</td>
                                                    <td>2018</td>
                                                    <td>Proses Pengajuan Paten Sederhana</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                              </tbody>
                                        </table>
                                      </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection