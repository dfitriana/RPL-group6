@extends('layout.operator')
@extends('layout.navbar')
@section('title','Sumber Daya Manusia: Publikasi Ilmiah DTPS | SIAPS FMIPA')
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
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{route('publikasi')}}" id="isian">Publikasi</a>
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
                                    Jumlah judul publikasi ilmiah dengan judul yang relevan dengan bidang program studi, yang dihasilkan oleh DTPS delam 3 tahun terakhir tersaji pada Tabel berikut.
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Data Publikasi Ilmiah DTPS</a>
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
                                                    <th scope="col" rowspan="2">No.</th>
                                                    <th scope="col" rowspan="2">Jenis Publikasi</th>
                                                    <th scope="col" colspan="2" class="text-center">Jumlah Judul</th>
                                                    <th scope="col" rowspan="2">Jumlah</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">TS-1</th>
                                                    <th scope="col">TS</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Jurnal penelitian tidak terakreditasi </td>
                                                    <td>6</td>
                                                    <td></td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jurnal penelitian nasional terakreditasi</td>
                                                    <td>8</td>
                                                    <td>7</td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Jurnal penelitian internasional</td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Jurnal penelitian internasional bereputasi</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Seminar wilayah/lokal/perguruan tinggi</td>
                                                    <td>1</td>
                                                    <td>5</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Seminar nasional</td>
                                                    <td>5</td>
                                                    <td>6</td>
                                                    <td>11</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Seminar internasional</td>
                                                    <td>16</td>
                                                    <td>19</td>
                                                    <td>35</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Tulisan di media massa wilayah</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Tulisan di media massa nasional</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Tulisan di media massa internasional</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-center">Jumlah</td>
                                                    <td>42</td>
                                                    <td>40</td>
                                                    <td>82</td>
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
