@extends('layout.operator')
@extends('layout.navbar')
@section('title','Sumber Daya Manusia: Book Chapter | SIAPS FMIPA')
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
                                            <li class="nav-item" id="scnd">
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
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('paten')}}">Paten</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('hki')}}">HKI</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('teknologi-tepat-guna')}}">Teknologi Tepat Guna</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{route('book-chapter')}}"  id="isian">Book Chapter</a>
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
                                    <a class="navbar-brand">Data HKI Buku Ber-ISBN, Book Chapter</a>
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
                                                    <th>IV</th>
                                                    <th colspan="3">
                                                        Buku ber-ISBN, Book Chapter
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        Analysis of the Student Ability Growth to 
                                                        Integrate the Character Values in 
                                                        Mathematics Learning Process (Case Study 
                                                        on Findings at Guangxi Normal University)
                                                    </td>
                                                    <td>2018</td>
                                                    <td>Buku Ber-ISBN</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Dasar-dasar pemprograman Web</td>
                                                    <td>2018</td>
                                                    <td>Buku Ber-ISBN</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Mobile Programming Menggunakan App Inventor</td>
                                                    <td>2018</td>
                                                    <td>Buku Ber-ISBN</td>
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