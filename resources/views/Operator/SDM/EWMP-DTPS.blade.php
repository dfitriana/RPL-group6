@extends('layout.operator')
@extends('layout.navbar')
@section('title','Sumber Daya Manusia: Ekuivalen Waktu Mengajar Penuh Dosen Tetap Perguruan Tinggi | SIAPS FMIPA')
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
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{route('sdm-ewmp-dtps')}}" id="isian">EWMP DTPS</a>
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
                                                <a class="nav-link active" href="{{route('sdm-penelitian')}}">PKM</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-penelitian')}}">Publikasi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-penelitian')}}">Sitasi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-penelitian')}}">Paten</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-penelitian')}}">HKI</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-penelitian')}}">Teknologi Tepat Guna</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-penelitian')}}">Book Chapter</a>
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
                                    Data Ekuivalen Waktu Mengajar Penuh (EWMP) Dari Dosen Tetap Perguruan Tinggi yang ditugaskan di program studi yang diakreditasi (DT) pada saat TS tersaji pada Tabel berikut:
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Data Mahasiswa</a>
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
                                                    <th scope="col">Nama Dosen (DT)</th>
                                                    <th scope="col">DTPS</th>
                                                    <th scope="col" colspan="6">Ekuivalen Waktu Mengajar Penuh (EWMP) pada saat TS dalam satuan kredit semester (sks)</th>
                                                    <th scope="col">Jumlah (sks)</th>
                                                    <th scope="col">Rata-rata per Semester (sks)</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col" colspan="3">Pendidikan: Pembelajaran dan Pembimbingan</th>
                                                    <th scope="col">Penelitian</th>
                                                    <th scope="col">PKM</th>
                                                    <th scope="col">Tugas Tambahan dan/atau Penunjang</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                </tr>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">PS yang Diakreditasi</th>
                                                    <th scope="col">PS lain di dalam PT</th>
                                                    <th scope="col">PS lain di luar PT</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dr. Alamsyah, S. Si., M. Kom.</td>
                                                    <td>V</td>
                                                    <td>10</td>
                                                    <td>26,5</td>
                                                    <td></td>
                                                    <td>2,1</td>
                                                    <td>0,24</td>
                                                    <td>3</td>
                                                    <td>41,84</td>
                                                    <td>20,92</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Endang Sugiharti, S. Si., M. Kom.</td>
                                                    <td>V</td>
                                                    <td>6</td>
                                                    <td>17</td>
                                                    <td></td>
                                                    <td>4,2</td>
                                                    <td>1,8</td>
                                                    <td>3</td>
                                                    <td>32</td>
                                                    <td>16</td>
                                                </tr>
                                                <tr>-
                                                    <td>3</td>
                                                    <td>Riza Arifudin, S. Pd., M. Cs.</td>
                                                    <td>V</td>
                                                    <td>7,5</td>
                                                    <td>11,5</td>
                                                    <td></td>
                                                    <td>2,4</td>
                                                    <td>1,8</td>
                                                    <td>3</td>
                                                    <td>25</td>
                                                    <td>12,5</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Much. Aziz Muslim, S. Kom., M. Kom.</td>
                                                    <td>V</td>
                                                    <td>7</td>
                                                    <td>14,5</td>
                                                    <td></td>
                                                    <td>4,2</td>
                                                    <td>1,8</td>
                                                    <td>3</td>
                                                    <td>30,5</td>
                                                    <td>15,25</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Zaenal Abidin, S. Si., M. Cs., Ph.D.</td>
                                                    <td>V</td>
                                                    <td>14</td>
                                                    <td>10</td>
                                                    <td></td>
                                                    <td>2,1</td>
                                                    <td>0,24</td>
                                                    <td>3</td>
                                                    <td>26,34</td>
                                                    <td>13,17</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Dr. Djuniadi, M. T.</td>
                                                    <td>V</td>
                                                    <td>3</td>
                                                    <td>18,5</td>
                                                    <td></td>
                                                    <td>0,64</td>
                                                    <td>1,95</td>
                                                    <td></td>
                                                    <td>24,09</td>
                                                    <td>12,045</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Dr. Feddy Setio Pribadi S.Pd., MT.</td>
                                                    <td>V</td>
                                                    <td>3</td>
                                                    <td>12</td>
                                                    <td></td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td></td>
                                                    <td>15</td>
                                                    <td>7,5</td>
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