@extends('layout.operator')
@extends('layout.navbar')
@section('title','Luaran dan Capaian Tri Dharma: Prestasi Akademik Mahasiswa | SIAPS FMIPA')
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
                                                <a class="nav-link active" href="{{route('ipk-lulusan')}}">IPK Lulusan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{route('prestasi-akademik-mhs')}}" id="isian">Prestasi Akademik Mahasiswa</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('prestasi-nonakademik-mhs')}}">Prestasi non Akademik Mahasiswa</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('lulusan')}}">Lulusan</a>
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
                                                    <th scope="col" rowspan="2">No.</th>
                                                    <th scope="col" rowspan="2">Nama Kegiatan</th>
                                                    <th scope="col" rowspan="2">Waktu Perolehan (YYYY)</th>
                                                    <th scope="col" colspan="3">Tingkat</th>
                                                    <th scope="col" rowspan="2">Prestasi yang Dicapai</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col" class="text-center">Lokal/Wilayah</th>
                                                    <th scope="col" class="text-center">Nasional</th>
                                                    <th scope="col" class="text-center">Internasional</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Ideathon Inovation Covid-19</td>
                                                    <td>2020</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>Pesertaan Muhammad Subekhi Muryantoro</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Lomba Esai Nasional Himlu-Malang 2019-2020</td>
                                                    <td>2020</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>Pesertaan Gilang Ramadhan</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>LKTIN MOCE Universitas Bengkulu</td>
                                                    <td>2020</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>Finalis an Gilang Ramadhan</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Research Night UKM Penelitian 2019</td>
                                                    <td>2019</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td>Juara 1 Gilang Ramadhan</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        Lomba ACTION Politekkes Kemenkes 
                                                        Kesehatan Malang
                                                    </td>
                                                    <td>2018</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>
                                                        Juara 2 an 
                                                        Tiffany 
                                                        Ovilia
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        Kredit Transfer ke Universiti 
                                                        Malaysia Pahang (Malaysia)
                                                    </td>
                                                    <td>2020</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td>
                                                        Peserta 
                                                        Internasiona
                                                        l Kredit 
                                                        Transfer an
                                                        Defa 
                                                        Riandina
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>
                                                        Kredit Transfer ke Universiti 
                                                        Malaysia Pahang (Malaysia)
                                                    </td>
                                                    <td>2020</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td>
                                                        Peserta 
                                                        Internasiona
                                                        l Kredit 
                                                        Transfer an
                                                        Manasya Khulafa Alief Rahman
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>
                                                        Kredit Transfer ke Universiti 
                                                        Malaysia Pahang (Malaysia)
                                                    </td>
                                                    <td>2020</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td>
                                                        Peserta 
                                                        Internasiona
                                                        l Kredit 
                                                        Transfer an
                                                        Muhammad 
                                                        Rifai 
                                                        Lasmana
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>
                                                        Kredit Transfer ke Universiti 
                                                        Malaysia Pahang (Malaysia)
                                                    </td>
                                                    <td>2020</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td>
                                                        Peserta 
                                                        Internasiona
                                                        l Kredit 
                                                        Transfer an
                                                        M. Haidar 
                                                        Ridho 
                                                        Andalas
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>
                                                        Kredit Transfer ke Universiti 
                                                        Malaysia Pahang (Malaysia)
                                                    </td>
                                                    <td>2020</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td>
                                                        Peserta 
                                                        Internasiona
                                                        l Kredit 
                                                        Transfer an
                                                        Syahda 
                                                        Armadiva 
                                                        Usman
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