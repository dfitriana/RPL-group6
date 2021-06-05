@extends('layout.operator')
@extends('layout.navbar')
@section('title','Pendidikan: Kepuasan Mahasiswa | SIAPS FMIPA')
@section('content')

        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Pendidikan</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">Data Pendidikan</p>
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
                                                <a class="nav-link active" href="">Kurikulum</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="">Integrasi Penelitian/PKM dan Pembelajaran</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{route('kepuasan-mahasiswa')}}" id="isian">Kepuasan Mahasiswa</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center" id="isian"></div>
                            </div>
                            
                            <div class="card-body">
                                <div class="alert" role="alert" id="note">
                                    <h3 style="color: white;">Catatan!</h3>
                                    <p>Data ini terakhir diambil dari Sistem Informasi Akademik: 05 November 2020.</p>
                                </div>
                                
                                <div class="alert alert-secondary" role="alert">
                                    Hasil pengukuran kepuasan mahasiswa terhadap proses pendidikan
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Kepuasan Mahasiswa</a>
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
                                                    <th scope="col" rowspan="2">Aspek yang Diukur</th>
                                                    <th scope="col" colspan="4">Tingkat Kepuasan Mahasiswa (%)</th>
                                                    <th scope="col" rowspan="2">Rencana Tindak Lanjut oleh UPPS/S</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Sangat Baik</th>
                                                    <th scope="col">Baik</th>
                                                    <th scope="col">Cukup</th>
                                                    <th scope="col">Kurang</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Kendala (reliabiliti): kemampuan dosen, tenaga kependidikan, dan pengelola dalam memberikan pelayanan.</td>
                                                    <td>61</td>
                                                    <td>17,1</td>
                                                    <td>19,5</td>
                                                    <td>2,4</td>
                                                    <td>
                                                        Meningkatkan kemampuan 
                                                        dosen dalam mengelola 
                                                        pembelajaran
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Daya tanggap (responsivenesss): kemauan dari dosen, tenaga kependidikan, dan pengelola dalam membantu mahasiswa dan memberikan jasa dengan cepat.</td>
                                                    <td>58,5</td>
                                                    <td>17,1</td>
                                                    <td>22</td>
                                                    <td>2,4</td>
                                                    <td>
                                                        Meningkatkan daya tanggap 
                                                        dosen dalam memberikan 
                                                        layanan
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Kepastian (assurance): kemampuan dosen, tenaga kependidikan, dan pengelola untuk memberikan keyakinan kepada mahasiswa dalam pelayanan yang diberikan telah sesuai dengan ketentuan.</td>
                                                    <td>53,7</td>
                                                    <td>9,8</td>
                                                    <td>29,3</td>
                                                    <td>7,3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Empati (empathy): kesediaan/kepedulian dosen, tenaga kependidikan, dan pengelola untuk memberikan perhatian kepada masalah atau kendala yang dialami mahasiswa.</td>
                                                    <td>51,2</td>
                                                    <td>17,1</td>
                                                    <td>24,4</td>
                                                    <td>7,3</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        Tangible: penilaian 
                                                        mahasiswa terhadap 
                                                        kecukupan, aksesibitas, 
                                                        kualitas sarana dan 
                                                        prasarana
                                                    </td>
                                                    <td>43,9</td>
                                                    <td>7,3</td>
                                                    <td>29,3</td>
                                                    <td>19,5</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-center" colspan="2">Jumlah</th>
                                                    <td>268,3</td>
                                                    <td>68,4</td>
                                                    <td>124,5</td>
                                                    <td>38,9</td>
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