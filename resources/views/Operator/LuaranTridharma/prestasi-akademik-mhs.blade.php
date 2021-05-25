@extends('layout.operator')
@extends('layout.navbar')
@section('title','Luaran dan Capaian Tri Dharma | SIAPS FMIPA')
@section('content')
        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Luaran dan Capaian Tri Dharma</h1>
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
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">IPK Lulusan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="" id="isian">Prestasi Akademik Mahasiswa</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Prestasi non Akademik Mahasiswa</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Lulusan</a>
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
                                    Prestasi akademik yang dicapai mahasiswa program studi dalam 5 tahun terakhir tersaji pada Tabel berikut
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Prestasi Akademik yang Dicapai Mahasiswa Program Studi</a>
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
                                                    <th scope="col">Nama Kegiatan</th>
                                                    <th scope="col">Waktu Perolehan (YYYY)</th>
                                                    <th scope="col" colspan="3">Tingkat</th>
                                                    <th scope="col">Prestasi yang Dicapai</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col" colspan="3"></th>
                                                    <th scope="col" class="text-center">Lokal/Wilayah</th>
                                                    <th scope="col" class="text-center">Nasional</th>
                                                    <th scope="col" class="text-center">Internasional</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ideathon Inovation Covid-19</td>
                                                    <td>2020</td>
                                                    <td></td>
                                                    <td class="text-center">v</td>
                                                    <td></td>
                                                    <td>Pesertaan Muhammad Subekhi Muryantoro</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Lomba Esai Nasional Himlu-Malang 2019-2020</td>
                                                    <td>2020</td>
                                                    <td></td>
                                                    <td class="text-center">v</td>
                                                    <td></td>
                                                    <td>Pesertaan Gilang Ramadhan</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>LKTIN MOCE Universitas Bengkulu</td>
                                                    <td>2020</td>
                                                    <td></td>
                                                    <td class="text-center">v</td>
                                                    <td></td>
                                                    <td>Finalis an Gilang Ramadhan</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Research Night UKM Penelitian 2019</td>
                                                    <td>2020</td>
                                                    <td class="text-center">v</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Juara 1 Gilang Ramadhan</td>
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