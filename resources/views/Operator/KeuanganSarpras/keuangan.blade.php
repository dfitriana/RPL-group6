@extends('layout.operator')
@extends('layout.navbar')
@section('title','Keuangan, Sarana, dan Prasarana | SIAPS FMIPA')
@section('content')

        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-2">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Keuangan, Sarana, dan Prasarana</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">Data Keuangan, Sarana, dan Prasarana</p>
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
                                                <a class="nav-link active" href="" id="isian">Keuangan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center" id="isian"></div>
                            </div>
                            
                            <div class="card-body">
                                <div class="alert" role="alert" id="note">
                                    <h3 style="color: white;">Catatan!</h3>
                                    <p>Data ini terakhir diambil dari Sistem Informasi Keuangan: 05 November 2020.</p>
                                </div>
                                
                                <div class="alert alert-secondary" role="alert">
                                    Penggunaan Dana Program Studi Sistem Informasi
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Penggunaan Dana</a>
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
                                                    <th scope="col">Jenis Penggunaan</th>
                                                    <th scope="col" colspan="4">Unit Pengelola Program Studi (Rupiah)</th>
                                                    <th scope="col" colspan="4">Program Studi (Rupiah)</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col" colspan="2"></th>
                                                    <th scope="col">TS-2</th>
                                                    <th scope="col">TS-1</th>
                                                    <th scope="col">TS</th>
                                                    <th scope="col">Rata-rata</th>
                                                    <th scope="col">TS-2</th>
                                                    <th scope="col">TS-1</th>
                                                    <th scope="col">TS</th>
                                                    <th scope="col">Rata-rata</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Biaya Operasional Pendidikan</td>
                                                    <td colspan="8"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>a. Biaya Dosen (Gaji, Honor)</td>
                                                    <td>28,239,744,692</td>
                                                    <td>28,714,491,322</td>
                                                    <td>31,397,262,702</td>
                                                    <th>29,450,499,572</th>
                                                    <td>80,398,800</td>
                                                    <td>95,954,000</td>
                                                    <td>105,549,400</td>
                                                    <th>93,967,400</th>
                                                </tr>
                                                <tr>-
                                                    <td></td>
                                                    <td>b. Biaya Tenaga Kependidikan (Gaji, Honor)</td>
                                                    <td>4,834,748,668</td>
                                                    <td>6,110,599,224</td>
                                                    <td>6,872,854,298</td>
                                                    <th>5,939,400,730</th>
                                                    <td>592,738,000</td>
                                                    <td>582,744,000</td>
                                                    <td>873,047,016</td>
                                                    <th>683,509,672</th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>c. Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)</td>
                                                    <td>760,975,000</td>
                                                    <td>1,032,378,000</td>
                                                    <td>976,775,000</td>
                                                    <th>923,376,000</th>
                                                    <td>151,572,000</td>
                                                    <td>169,040,000</td>
                                                    <td>155,000,000</td>
                                                    <th>158,537,333</th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>d. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung)</td>
                                                    <td>1,204,387,000</td>
                                                    <td>1,070,245,000</td>
                                                    <td>1,334,849,000</td>
                                                    <th>1,203,157,000</th>
                                                    <td>244,708,857</td>
                                                    <td>219,195,571</td>
                                                    <td>251,622,714</td>
                                                    <th>238,509,048</th>
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