@extends('layout.operator')
@extends('layout.navbar')
@section('title','Mahasiswa: Mahasiswa Asing | SIAPS FMIPA')
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
                                                <a class="nav-link active" href="{{route('kualitas-input-mahasiswa')}}" id="scnd">Kualitas Input Mahasiswa</a>
                                            </li>
                                            <li class="nav-item"  id="isian">
                                                <a class="nav-link active" href="{{route('mahasiswa-asing')}}">Mahasiswa Asing</a>
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
                                    Jumlah mahasiswa asing yang terdaftar di seluruh program studi pada UPPS dalam 3 tahun terakhir tersaji pada Tabel berikut.
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Data Mahasiswa Asing</a>
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
                                                    <th scope="col" rowspan="2">Program Studi</th>
                                                    <th scope="col" colspan="3">Jumlah Mahasiswa Aktif</th>
                                                    <th scope="col" colspan="3">Jumlah Mahasiswa Asing Penuh  Waktu (Full-time)</th>
                                                    <th scope="col" colspan="3">Jumlah Mahasiswa Asing Paruh Waktu (Part-time)</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">TS-2</th>
                                                    <th scope="col">TS-1</th>
                                                    <th scope="col">TS</th>
                                                    <th scope="col">TS-2</th>
                                                    <th scope="col">TS-1</th>
                                                    <th scope="col">TS</th>
                                                    <th scope="col">TS-2</th>
                                                    <th scope="col">TS-1</th>
                                                    <th scope="col">TS</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Pendidikan Matematika</td>
                                                    <td>734</td>
                                                    <td>812</td>
                                                    <td>871</td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Matematika</td>
                                                    <td>213</td>
                                                    <td>218</td>
                                                    <td>229</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Statistika Terapan dan Komputasi</td>
                                                    <td>123</td>
                                                    <td>116</td>
                                                    <td>122</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Pendidikan Fisika</td>
                                                    <td>454</td>
                                                    <td>454</td>
                                                    <td>476</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Fisika</td>
                                                    <td>211</td>
                                                    <td>214</td>
                                                    <td>236</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Pendidikan Kimia</td>
                                                    <td>465</td>
                                                    <td>435</td>
                                                    <td>427</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Kimia</td>
                                                    <td>288</td>
                                                    <td>338</td>
                                                    <td>366</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Farmasi</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>46</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Pendidikan Biologi</td>
                                                    <td>498</td>
                                                    <td>537</td>
                                                    <td>559</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Biologi</td>
                                                    <td>269</td>
                                                    <td>332</td>
                                                    <td>354</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Pendidikan IPA</td>
                                                    <td>204</td>
                                                    <td>286</td>
                                                    <td>317</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Ilmu Lingkungan</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>34</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Teknik Informatika</td>
                                                    <td>163</td>
                                                    <td>301</td>
                                                    <td>369</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Sistem Informasi</td>
                                                    <td>0</td>
                                                    <td>40</td>
                                                    <td>88</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>2</td>
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