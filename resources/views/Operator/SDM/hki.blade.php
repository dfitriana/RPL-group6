@extends('layout.operator')
@extends('layout.navbar')
@section('title','Sumber Daya Manusia: Hak Cipta | SIAPS FMIPA')
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
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('paten')}}">Paten</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{route('hki')}}" id="isian">HKI</a>
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
                                    <a class="navbar-brand">Data HKI Hak Cipta</a>
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
                                                    <th>II</th>
                                                    <th colspan="3">
                                                        HKI: a) Hak Cipta, b) Desain Produk Industri, c) Perlindungan Varietas Tanaman 
                                                        (Sertifikat Perlindungan Varietas Tanaman, Sertifikat Pelepasan Varietas, Sertifikat 
                                                        Pendaftaran Varietas), d) Desain Tata Letak Sirkuit Terpadu, e) dll.)
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Aplikasi "Sistem Pengenalan Ekspresi Wajah 
                                                        Menggunakan Metode Fisherface Dengan 
                                                        Pendekatan Jaringan Syaraf Tiruan 
                                                        Backpropagation"
                                                    </td>
                                                    <td>2020</td>
                                                    <td>
                                                        EC00202021237 <br>
                                                        Zaenal Abidin, S.Si., M.Cs., Ph.D.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Web-based Sentiment Analysis Application 
                                                        Menggunakan Kernel Radial Basis 
                                                        Functional Dan Information Gain
                                                    </td>
                                                    <td>2020</td>
                                                    <td>
                                                        EC00202017354 <br>
                                                        Wahyu Destian 
                                                        Wicaksono, Zaenal 
                                                        Abidin, S.Si., M.Cs., 
                                                        Ph.D.,
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>SURAT PENCATATAN CIPTAAN (HAK 
                                                        CIPTA) "Data Mining Algoritma C.45 Disertai 
                                                        Contoh Kasus dan Penerapannya dengan 
                                                        Program Komputer"
                                                    </td>
                                                    <td>2019</td>
                                                    <td>EC00201928000 <br>
                                                        Much Aziz Muslim
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>SURAT PENCATATAN CIPTAAN (HAK 
                                                        CIPTA) “Program Aplikasi Banyan”
                                                    </td>
                                                    <td>2019</td>
                                                    <td>EC00201991200 <br>
                                                        Alamsyah, S.Si., 
                                                        M.Kom
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Aplikasi Prediksi Banckrupty Berbasis 
                                                        Jaringan Syaraf Tiruan
                                                    </td>
                                                    <td>2019</td>
                                                    <td>EC00201991192 <br>
                                                        Alamsyah, S.Si., 
                                                        M.Kom, Much Aziz 
                                                        Muslim, S.Kom., 
                                                        M.Kom.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>SURAT PENCATATAN CIPTAAN (HAK 
                                                        CIPTA) “Sistem Informasi Pendataan 
                                                        Ternak”
                                                    </td>
                                                    <td>2018</td>
                                                    <td>EC00201802839 <br>
                                                        Endang Sugiharti, Riza 
                                                        Arifudin
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>SURAT PENCATATAN CIPTAAN (HAK 
                                                        CIPTA) “Panduan Aplikasi Kartu Ternak”
                                                    </td>
                                                    <td>2019</td>
                                                    <td>EC00201985612 <br>
                                                        Endang Sugiharti
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>SURAT PENCATATAN CIPTAAN (HAK 
                                                        CIPTA)
                                                        Aplikasi “Statistics Data Analysis”
                                                    </td>
                                                    <td>2018</td>
                                                    <td>EC00201811499 <br>
                                                        Riza Arifudin
                                                    </td>
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