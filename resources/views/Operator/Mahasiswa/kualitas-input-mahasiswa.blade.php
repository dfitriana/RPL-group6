@extends('layout.operator')
@section('content')

        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">Data Mahasiswa</p>
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
                                                <a class="nav-link active" href="" id="isian">Kualitas Input Mahasiswa</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Mahasiswa Asing</a>
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
                                
                                <div class="alert alert-secondary" role="alert">
                                    Daya tampung, jumlah calon mahasiswa (pendaftar dan lulus seleksi), jumlah mahasiswa baru (reguler dan transfer), dan jumlah mahasiswa aktif (reguler dan transfer) dalam 5 tahun terakhir di program studi yang diakreditasi tersaji pada Tabel berikut:
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
                                                    <th scope="col">Tahun Akademik</th>
                                                    <th scope="col">Daya Tampung</th>
                                                    <th scope="col">Jumlah Calon Mahasiswa</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Jumlah Mahasiswa Baru</th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Jumlah Mahasiswa Aktif</th>
                                                    <th scope="col"></th>
                                                </tr>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Pendaftar</th>
                                                    <th scope="col">Lulus Seleksi</th>
                                                    <th scope="col">Reguler</th>
                                                    <th scope="col">Transfer</th>
                                                    <th scope="col">Reguler</th>
                                                    <th scope="col">Transfer</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>TS-4</td>
                                                  <td>-</td>
                                                  <td>-</td>
                                                  <td>-</td>
                                                  <td>-</td>
                                                  <td>-</td>
                                                  <td>-</td>
                                                  <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>TS-3</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>-
                                                    <td>TS-2</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>TS-1</td>
                                                    <td>40</td>
                                                    <td>515</td>
                                                    <td>48</td>
                                                    <td>40</td>
                                                    <td>0</td>
                                                    <td>40</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>TS</td>
                                                    <td>48</td>
                                                    <td>1622</td>
                                                    <td>51</td>
                                                    <td>48</td>
                                                    <td>0</td>
                                                    <td>88</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Jumlah</th>
                                                    <td></td>
                                                    <td>2137</td>
                                                    <td>99</td>
                                                    <td>88</td>
                                                    <td>0</td>
                                                    <td>88</td>
                                                    <td></td>
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