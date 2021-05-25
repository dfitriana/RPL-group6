@extends('layout.operator')
@extends('layout.navbar')
@section('title','Penelitian | SIAPS FMIPA')
@section('content')

<div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Penelitian</h1>
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
                                                <a class="nav-link active" href="" id="isian">Penelitian</a>
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
                                    Data penelitian DTPS yang dalam pelaksanaannya melibatkan mahasiswa Program Studi TS-2 sampai dengan TS
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Penelitian DTPS yang Melibatkan Mahasiswa</a>
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
                                                    <th scope="col">Tema Penelitian Sesuai Roadmap</th>
                                                    <th scope="col">Nama Mahasiswa</th>
                                                    <th scope="col">Judul Kegiatan</th>
                                                    <th scope="col">Tahun (YYYY)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Much Aziz Muslim</td>
                                                    <td>IT Adaptation on E-Governmen</td>
                                                    <td>OKTARIA GINA KHOIRUNNISA, AFAN ISMI FAUZAN</td>
                                                    <td>PENGEMBANGAN PERANGKAT LUNAK AUDIT MUTU INTERNAL DENGAN ISO 9001 PADA JURUSAN ILMU KOMPUTER UNIVERSITAS NEGERI SEMARANG</td>
                                                    <td>2019</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Endang Sugiharti</td>
                                                    <td>IT Adaptation on E-Bussiness</td>
                                                    <td>OKTARIA GINA KHOIRUNNISA, AFAN ISMI FAUZAN</td>
                                                    <td>AUTOMATED DISASTER RECOVERY PLAN UNTUK SUSTAINIBILITY SISTEM INFORMASI KOMPREHENSIF FMIPA UNNES</td>
                                                    <td>2019</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Much Aziz Muslim</td>
                                                    <td>Artificial Intelligent</td>
                                                    <td>DWIKA ANANDA AGUSTINA PERTIWI</td>
                                                    <td>Analisis Watermarking Image Menggunakan Metode Haar dan Daubechies dengan Menerapkan Gaussian Filter untuk Pengamatan Data Digital</td>
                                                    <td>2020</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Riza Arifudin</td>
                                                    <td>Data Mining</td>
                                                    <td>OKTARIA GINA KHOIRUNNISA</td>
                                                    <td>Pengembangan Aplikasi Deteksi Komentar Spam Otomatis pada Website Berbahasa Indonesia Menggunakan Metode SVM</td>
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