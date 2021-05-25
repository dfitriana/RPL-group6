@extends('layout.operator')
@extends('layout.navbar')
@section('title','Pengabdian | SIAPS FMIPA')
@section('content')
        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Pengabdian</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">DTPS</p>
                        </div>
                    </div>

                    <!-- kolom -->
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-header" style="background-color: white;">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="" id="isian">Pengabdian</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center" id="isian"></div>
                            </div>
                            
                            <div class="card-body">
                                <div class="alert" role="alert" id="note">
                                    <h3 style="color: white;">Catatan!</h3>
                                    <p>Data ini terakhir diambil dari Sistem Informasi Penelitian Pengabdian: 05 November 2020.</p>
                                </div>
                                
                                <div class="alert alert-secondary" role="alert">
                                    Data Pengabdian Kepada Masyarakat DTPS yang dalam pelaksanaannya melibatkan mahasiswa Program Studi TS-2 sampai dengan TS
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Pengabdian Kepada Masyarakat DTPS yang Melibatkan Mahasiswa</a>
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
                                                    <th scope="col">Nama Dosen</th>
                                                    <th scope="col">Tema PKM Sesuai Roadmap</th>
                                                    <th scope="col">Nama Mahasiswa</th>
                                                    <th scope="col">Judul Kegiatan</th>
                                                    <th scope="col">Tahun (YYYY)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Riza Arifudin</td>
                                                    <td>Masyarakat Digital</td>
                                                    <td>SAHBA ARMANDIVA USMAN</td>
                                                    <td>PEMANFAATAN SMARTPHONE BERBASIS ANDROID SEBAGAI ALTERNATIF PAPPERLESS TEST DI SMP 1 KARIMUNJAWA</td>
                                                    <td>2019</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Riza Arifudin</td>
                                                    <td>Masyarakat Digital</td>
                                                    <td>DIYAH AYU FITRIANA, ASHARINNISA SALSABILA</td>
                                                    <td>PEMBERDAYAAN GURU DI SEKOLAH MENEGAH DALAM PEMANFAATAN PENGUJIAN BERBASIS ANDROID SEBAGAI UPAYA PENGIMPLEMENTASIAN MERDEKA BELAJAR</td>
                                                    <td>2020</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Much Aziz Muslim</td>
                                                    <td>IT Adaptation di Masyarakat Luas</td>
                                                    <td>DWIKA ANANDA AGUSTINA PERTIWI</td>
                                                    <td>Sosialisasi Produk Solar Panel untuk Penerangan Jalan Umum di Desa Gedongsari Banjarejo Blora</td>
                                                    <td>2020</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Riza Arifudin</td>
                                                    <td>Masyarakat Digital</td>
                                                    <td>GILANG RAMADHAN</td>
                                                    <td>PEMBERDAYAAN GURU DI SEKOLAH MENENGAH DALAM PENGUJIAN BERBASIS ANDROID SEBAGAI UPAYA PENGIMPLEMENTASIAN MERDEKA BELAJAR</td>
                                                    <td>2020</td>
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