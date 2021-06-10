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

                                <div class="view">
                                    <div class="table-responsive-xl wrapper">
                                        <table class="table table-borderless table-hover">
                                        <thead>
                                                <tr>
                                                    <th scope="col" rowspan="2">No.</th>
                                                    <th scope="col" rowspan="2">Jenis Penggunaan</th>
                                                    <th scope="col" colspan="4">Unit Pengelola Program Studi (Rupiah)</th>
                                                    <th scope="col" colspan="4">Program Studi (Rupiah)</th>
                                                </tr>
                                                <tr>
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
                                                <tr>
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
                                                <tr>
                                                    <td>2</td>
                                                    <td>Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).</td>
                                                    <td>549,613,400</td>
                                                    <td>557,339,930</td>
                                                    <td>623,806,540</td>
                                                    <th>576,919,957</th>
                                                    <td>16,000,000</td>
                                                    <td>17,500,000</td>
                                                    <td>19,000,000</td>
                                                    <th>17,500,000</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-center">Jumlah</th>
                                                    <th>35,589,468,760</th>
                                                    <th>37,485,053,476</th>
                                                    <th>41,205,537,540</th>
                                                    <th>38,093,353,259</th>
                                                    <th>1,085,417,657</th>
                                                    <th>1,084,433,571</th>
                                                    <th>1,406,219,130</th>
                                                    <th>1,192,023,453</th>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Biaya Penelitian</td>
                                                    <td>5,284,528,000</td>
                                                    <td>8,984,219,000</td>
                                                    <td>8,355,554,000</td>
                                                    <th>7,541,433,667</th>
                                                    <td>1,396,000,000</td>
                                                    <td>510,000,000</td>
                                                    <td>1,584,065,000</td>
                                                    <th>1,163,355,000</th>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Biaya PKM</td>
                                                    <td>1,447,500,000</td>
                                                    <td>1,106,000,000</td>
                                                    <td>1,135,500,000</td>
                                                    <th>1,229,666,667</th>
                                                    <td>629,500,000</td>
                                                    <td>559,000,000</td>
                                                    <td>730,700,000</td>
                                                    <th>639,733,333</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-center">Jumlah</th>
                                                    <th>6,732,028,000</th>
                                                    <th>10,090,219,000</th>
                                                    <th>9,491,054,000</th>
                                                    <th>8,771,100,333</th>
                                                    <th>2,025,500,000</th>
                                                    <th>1,069,000,000</th>
                                                    <th>2,314,765,000</th>
                                                    <th>1,803,088,333</th>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Biaya Investasi SDM</td>
                                                    <td>919,924,294</td>
                                                    <td>943,514,544</td>
                                                    <td>1,394,685,044</td>
                                                    <th>1,086,041,294</th>
                                                    <td>100,560,250</td>
                                                    <td>109,150,500</td>
                                                    <td>101,740,750</td>
                                                    <th>103,817,167</th>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Biaya Investasi Sarana</td>
                                                    <td>63,833,155,082</td>
                                                    <td>63,833,155,082</td>
                                                    <td>63,833,155,082</td>
                                                    <th>63,833,155,082</th>
                                                    <td>6,910,153,293</td>
                                                    <td>6,910,153,293</td>
                                                    <td>6,910,153,293</td>
                                                    <th>6,910,153,293</th>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Biaya Investasi Prasarana</td>
                                                    <td>859,806,000</td>
                                                    <td>980,572,000</td>
                                                    <td>810,845,750</td>
                                                    <th>883,741,250</th>
                                                    <td>166,668,750</td>
                                                    <td>165,000,000</td>
                                                    <td>100,000,000</td>
                                                    <th>143,889,583</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-center">Jumlah</th>
                                                    <th>65,612,885,376</th>
                                                    <th>65,757,241,626</th>
                                                    <th>66,038,685,876</th>
                                                    <th>65,802,937,626</th>
                                                    <th>7,177,382,293</th>
                                                    <th>7,184,303,793</th>
                                                    <th>7,111,894,043</th>
                                                    <th>7,157,860,043</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection