@extends('layout.operator')
@extends('layout.navbar')
@section('title','Sumber Daya Manusia: Rekognisi DTPS | SIAPS FMIPA')
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
                                                <a class="nav-link active" href="{{route('profil-dosen')}}">Profil Dosen</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('dosen-pembimbing')}}">Dosen Pembimbing Utama TA</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-ewmp-dtps')}}">EWMP DTPS</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('dosen-tidaktetap')}}">Dosen Tidak Tetap</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{route('rekognisi')}}" id="isian">Rekognisi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-penelitian')}}">Penelitian</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sdm-pkm')}}">PKM</a> 
                                                <!-- belom -->
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('publikasi')}}">Publikasi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('sitasi')}}">Sitasi</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('paten')}}">Paten</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('hki')}}">HKI</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('teknologi-tepat-guna')}}">Teknologi Tepat Guna</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('book-chapter')}}">Book Chapter</a>
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
                                    Pengakuan/rekognisi atas kepakaran/prestasi/kinerja DTPS yang diterima dalam 3 tahun terakhir tersaji pada Tabel sebagai berikut.
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Data Rekognisi</a>
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
                                                    <th scope="col" rowspan="2">Nama Dosen</th>
                                                    <th scope="col" rowspan="2">Bidang Keahlian</th>
                                                    <th scope="col" rowspan="2">Rekognisi dan Bukti Pendukung</th>
                                                    <th scope="col" colspan="3" class="text-center">Tingkat</th>
                                                    <th scope="col" rowspan="2">Tahun</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Wilayah</th>
                                                    <th scope="col">Nasional</th>
                                                    <th scope="col">Internasional</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Zaenal Abidin S.Si., M.Cs., Ph.D.</td>
                                                    <td>Sistem Informasi</td>
                                                    <td>
                                                        Narasumber Kuliah Umum Pendidikan 
                                                        Matematika 2019 dengan topik Pentingnya 
                                                        Digital Skills Bagi Generasi Millenial 
                                                        Menghadapi Era Revolusi Industri 4.0
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>2019</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Zaenal Abidin S.Si., M.Cs., Ph.D.</td>
                                                    <td>Sistem Informasi</td>
                                                    <td>
                                                        Narasumber workshop bidang akademik 
                                                        Semester Gasal 2019-2020
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>2019</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Riza Arifudin, S.Pd, M.Cs</td>
                                                    <td>Pemrograman Komputer</td>
                                                    <td>
                                                        Narasumber Pelatihan Pengembangan 
                                                        Perangkat dan Media Pembelajaran Berbasis 
                                                        Android                                                        
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td>2019</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Zaenal Abidin S.Si., M.Cs., Ph.D.</td>
                                                    <td>Sistem Informasi</td>
                                                    <td>
                                                        Guest Lecture di Universiti Malaysia Pahang: 
                                                        Embracing Education 4.0: Promoting 
                                                        Technology and Technical Skills through 
                                                        Online Learning Community
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td>2019</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Zaenal Abidin S.Si., M.Cs., Ph.D.</td>
                                                    <td>Sistem Informasi</td>
                                                    <td>
                                                        Webinar Aptikom Jawa Tengah : Informatika 
                                                        Talk Series #2
                                                        Sukses Raih & Jalani Program S3 Dalam 
                                                        Negeri/Luar Negeri
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td>2020</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Dr. Alamsyah S.Si.,M.Kom</td>
                                                    <td>Kriptografi</td>
                                                    <td>
                                                        Narasumber di Webinar Strategi 
                                                        Menghasilkan Publikasi Internasional 
                                                        Bereputasi                                                        
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td>2020</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Dr. Feddy Setio Pribadi S.Pd., MT.</td>
                                                    <td>E-Learning</td>
                                                    <td>
                                                        Narasumber di Webinar Strategi 
                                                        Menghasilkan Publikasi Internasional 
                                                        Bereputasi                                                        
                                                    </td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center"></td>
                                                    <td>2020</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Dr. Feddy Setio Pribadi S.Pd., MT.</td>
                                                    <td>E-Learning</td>
                                                    <td>
                                                        Narasumber di Webinar Serie Penulisan 
                                                        Ilmiah Identifikasi Research Problem dan 
                                                        Research Gap dari Paper Ilmiah                                                  
                                                    </td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">v</td>
                                                    <td class="text-center"></td>
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