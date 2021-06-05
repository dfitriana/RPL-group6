@extends('layout.operator')
@extends('layout.navbar')
@section('title','Sumber Daya Manusia: Dosen Pembimbing Utama Tugas Akhir | SIAPS FMIPA')
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
                                                <a class="nav-link active" href="">Profil Dosen</a>
                                            </li>
                                            <li class="nav-item" id="isian">
                                                <a class="nav-link active" href="">Dosen Pembimbing Utama TA</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">EWMP DTPS</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Dosen Tidak Tetap</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Rekognisi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Penelitian</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">PKM</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Publikasi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Sitasi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Paten</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">HKI</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Teknologi Tepat Guna</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Book Chapter</a>
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
                                    DTPS yang menjadi pembimbing utama pada kegiatan tugas akhir mahasiswa (Laporan Akhir/Skripsi/Tesis/Disertasi) dalam 3 tahun terakhir tersaji pada Tabel berikut.
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Data Dosen Pembimbing Tugas Akhir</a>
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
                                                    <th scope="col" rowspan="3">No.</th>
                                                    <th scope="col" rowspan="3">Nama Dosen</th>
                                                    <th scope="col" colspan="6" class="text-center">Jumlah Mahasiswa yang Dibimbing</th>
                                                    <th scope="col" rowspan="3">Rata-rata Jumlah Bimbingan Di Semua Program/Semester</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col" colspan="3">PS yang Diakreditasi</th>
                                                    <th scope="col" colspan="3">PS Lain pada Program yang Sama Di PT</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">TS-1</th>
                                                    <th scope="col">TS</th>
                                                    <th scope="col">Rata-Rata</th>
                                                    <th scope="col">TS-1</th>
                                                    <th scope="col">TS</th>
                                                    <th scope="col">Rata-Rata</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dr. Alamsyah, S. Si., M. Kom.</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Endang Sugiharti, S. Si., M. Kom.</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>14</td>
                                                    <td>5</td>
                                                    <td>9,5</td>
                                                    <td>9,5</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Riza Arifudin, S. Pd., M. Cs.</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>10</td>
                                                    <td>4</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Much. Aziz Muslim, S. Kom., M. Kom.</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>16</td>
                                                    <td>6</td>
                                                    <td>11</td>
                                                    <td>11</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Zaenal Abidin, S. Si., M. Cs., Ph.D.</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td>11</td>
                                                    <td>6</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Dr. Djuniadi, M. T.</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>12</td>
                                                    <td>16</td>
                                                    <td>14</td>
                                                    <td>14</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Dr. Feddy Setio Pribadi S.Pd., MT.</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>14</td>
                                                    <td>17</td>
                                                    <td>15,5</td>
                                                    <td>15,5</td>
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