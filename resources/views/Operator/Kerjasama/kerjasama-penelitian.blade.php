@extends('layout.operator')
@extends('layout.navbar')
@section('title','Kerjasama: Penelitian | SIAPS FMIPA')
@section('content')

    <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Kerjasama</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">Data Kerjasama Program Studi</p>
                        </div>
                    </div>

                    <!-- kolom -->
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-header" style="background-color: white;">
                                        <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item" id="scnd">
                                                <a class="nav-link active" href="{{route('kerjasama-pendidikan')}}">Kerjasama Pendidikan</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('kerjasama-penelitian')}}" id="isian">Kerjasama Penelitian</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('kerjasama-pengabdian')}}">Kerjasama Pengabdian</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center" id="isian"></div>
                            </div>
                            
                            <div class="card-body">
                                <div class="alert" role="alert" id="note">
                                    <h3 style="color: white;">Catatan!</h3>
                                    <p>Data ini terakhir diambil pada Sistem Kerjasama pada 05 November 2020.</p>
                                </div>
                                
                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Kerjasama Penelitian</a>
                                    <form class="form-inline">
                                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                  </nav>
                                  <br><br>

                                <table class="table v-middle">
                                    <div class="table-responsive-xl">
                                        <table class="table table-borderless table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col" rowspan="2">No.</th>
                                                    <th scope="col" rowspan="2">Lembaga Mitra</th>
                                                    <th scope="col" colspan="3">Tingkat *)</th>
                                                    <th scope="col" rowspan="2">Judul Kegiatan Kerjasama</th>
                                                    <th scope="col" rowspan="2">Manfaat bagi PS yang Diakreditasi</th>
                                                    <th scope="col" rowspan="2">Waktu & Durasi</th>
                                                    <th scope="col" rowspan="2">Bukti Kerjasama</th>
                                                    <th scope="col" rowspan="2">Tahun Berakhirnya Kerjasama (YYYY)</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Internasional</th>
                                                    <th scope="col">Nasional</th>
                                                    <th scope="col">Wilayah/Lokal</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <th scope="row">1</th>
                                                  <td>Universitas Negeri Padang</td>
                                                  <td class="text-center"></td>
                                                  <td class="text-center">v</td>
                                                  <td class="text-center"></td>
                                                  <td>Kerjasama Bidang Pendidikan</td>
                                                  <td>Kerjasama Bidang Pendidikan</td>
                                                  <td>2020, 2 tahun</td>
                                                  <td>PKS</td>
                                                  <td>2022</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Universitas Negeri Jakarta</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>Kerjasama Bidang Pendidikan</td>
                                                    <td>Kerjasama Bidang Pendidikan</td>
                                                    <td>2020, 2 tahun</td>
                                                    <td>PKS</td>
                                                    <td>2022</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Universitas Negeri Gorontalo</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>Kerjasama Bidang Pendidikan</td>
                                                    <td>Kerjasama Bidang Pendidikan</td>
                                                    <td>2020, 2 tahun</td>
                                                    <td>PKS</td>
                                                    <td>2022</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Association for Information System Indonesia</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>2020, 5 tahun</td>
                                                    <td>MOA</td>
                                                    <td>2025</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Universiti Malaysia Pahang</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>2019</td>
                                                    <td>MOM</td>
                                                    <td>2021</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>University of Missouri-Kansas City</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>2020</td>
                                                    <td>MOU</td>
                                                    <td>2024</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>Crocodic</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td></td>
                                                    <td>2020</td>
                                                    <td>MOA</td>
                                                    <td>2022</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">8</th>
                                                    <td>Stiflin</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>2020</td>
                                                    <td>MOA</td>
                                                    <td>2022</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">9</th>
                                                    <td>Massey University (New Zealand)</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>2019</td>
                                                    <td>MOM</td>
                                                    <td>2024</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10</th>
                                                    <td>Hiroshima University (Jepang)</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>2018, 2 tahun</td>
                                                    <td>MOM</td>
                                                    <td>2020</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">11</th>
                                                    <td>Guang Xi Normal University (China)</td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>2018, 1 tahun</td>
                                                    <td>MOM</td>
                                                    <td>2019</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">12</th>
                                                    <td>Universitas Gadjah Mada</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>Kerjasama Bidang Tri Dharma</td>
                                                    <td>2018, 3 tahun</td>
                                                    <td>MOM</td>
                                                    <td>2021</td>
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