@extends('layout.operator')
@extends('layout.navbar')
@section('title','Sumber Daya Manusia: Profil Dosen | SIAPS FMIPA')
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
                                            <li class="nav-item" id="isian">
                                                <a class="nav-link active" href="">Profil Dosen</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
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
                                    Data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS tersaji pada Tabel berikut.
                                </div>

                                <nav class="navbar navbar-light" style="border-bottom: solid rgba(0,0,0,0.05) 3px;">
                                    <a class="navbar-brand">Data Profil Dosen</a>
                                    <form class="form-inline">
                                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </nav>

                                <table class="table v-middle">
                                    <div class="table-responsive-sm">
                                        <table class="table table-borderless table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col" rowspan="2">No.</th>
                                                    <th scope="col" rowspan="2">Nama Dosen</th>
                                                    <th scope="col" rowspan="2">NIDN/NIDK</th>
                                                    <th scope="col" colspan="2" class="text-center">Pendidikan Pascasarjana</th>
                                                    <th scope="col" rowspan="2">Bidang Keahlian</th>
                                                    <th scope="col" rowspan="2">Kesesuaian dengan Kompetensi PS</th>                                                <th scope="col" rowspan="2">Jabatan Akademik</th>
                                                    <th scope="col" rowspan="2">Sertifikat Pendidik Profesional</th>
                                                    <th scope="col" rowspan="2">Sertifikat Kompetensi/Profesi/Industri</th>
                                                    <th scope="col" rowspan="2">Mata Kuliah yang Diampu pada PS</th>
                                                    <th scope="col" rowspan="2">Kesesuaian Bidang Keahlian dengan Mata Kuliah Yang Dimpu</th>
                                                    <th scope="col" rowspan="2">Mata Kuliah yang Diampu pada PS Lain</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Magister/Magister Terapan/Spesialis</th>
                                                    <th scope="col">Doktor/Doktor Terapan/Spesialis</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dr. Alamsyah, S. Si., M. Kom.</td>
                                                    <td>40947</td>
                                                    <td class="text-center" colspan="2">S3</td>
                                                    <td>Kriptografi</td>
                                                    <td>v</td>
                                                    <td>Lektor</td>
                                                    <td>v</td>
                                                    <td>v</td>
                                                    <td>Interaksi Manusia dan Komputer, Praktikum Rekayasa Perangkat Lunak, & Rekayasa Perangkat Lunak</td>
                                                    <td>v</td>
                                                    <td>Forensika Digital, Interaksi Manusia dan Komputer, Kewirausahaan, Logika Informatika,Metodologi Penelitian, Pengajaran, Berbantuan Komputer, Praktikum Pengajaran, Berbantuan Komputer, Praktikum Rekayasa Perangkat Lunak, Rekayasa Perangkat Lunak, & Riset Teknologi Informasi</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Endang Sugiharti, S. Si., M. Kom.</td>
                                                    <td>40757</td>
                                                    <td class="text-center" colspan="2">S2</td>
                                                    <td>Pemrograman Komputer</td>
                                                    <td>v</td>
                                                    <td>Lektor</td>
                                                    <td>v</td>
                                                    <td></td>
                                                    <td>
                                                        Bahasa Inggris,
                                                        Pengantar Manajemen,
                                                        Interpersonal Skill,
                                                        Jaringan Komputer, &
                                                        Sistem Informasi Manajemen
                                                    </td>
                                                    <td>v</td>
                                                    <td>Forensika Digital, Interaksi Manusia dan Komputer, Kewirausahaan, Logika Informatika,Metodologi Penelitian, Pengajaran, Berbantuan Komputer, Praktikum Pengajaran, Berbantuan Komputer, Praktikum Rekayasa Perangkat Lunak, Rekayasa Perangkat Lunak, & Riset Teknologi Informasi</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Riza Arifudin, S. Pd., M. Cs.</td>
                                                    <td>40910</td>
                                                    <td class="text-center" colspan="2">S2</td>
                                                    <td>Pemrograman Komputer</td>
                                                    <td>v</td>
                                                    <td>Lektor</td>
                                                    <td>v</td>
                                                    <td>v</td>
                                                    <td>
                                                        Analisis dan Perancangan SI,
                                                        Pemrograman Berorientasi Objek,
                                                        Praktikum Analisis dan Perancangan SI,
                                                        Praktikum Pemrograman Berorientasi Objek, &
                                                        Sistem Operasi
                                                    </td>
                                                    <td>v</td>
                                                    <td>
                                                        Komputer dan Masyarakat,
                                                        Mobile Application,
                                                        Prak. Sistem Basis Data, &
                                                        Praktikum Sistem Basis Data
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Much. Aziz Muslim, S. Kom., M. Kom.</td>
                                                    <td>41021</td>
                                                    <td class="text-center" colspan="2">S2</td>
                                                    <td>Ilmu Komputer</td>
                                                    <td>v</td>
                                                    <td>Lektor Kepala</td>
                                                    <td>v</td>
                                                    <td>v</td>
                                                    <td>
                                                        Bahasa Pemrograman
                                                    </td>
                                                    <td>v</td>
                                                    <td>
                                                        Arsitektur dan Organisasi Komputer,
                                                        Bahasa Pemrograman,
                                                        Kewirausahaan, &
                                                        Sistem Informasi Geografis
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Zaenal Abidin, S. Si., M. Cs., Ph.D.</td>
                                                    <td>40931</td>
                                                    <td class="text-center" colspan="2">S3</td>
                                                    <td>Riset Sistem Informasi</td>
                                                    <td>v</td>
                                                    <td>Lektor</td>
                                                    <td>v</td>
                                                    <td>v</td>
                                                    <td>
                                                        Algoritma Pemrograman dan Struktur Data,
                                                        Aljabar Linier Elementer,
                                                        Komputer dan Masyarakat,
                                                        Pengantar Manajemen,
                                                        Riset Sistem Informasi,
                                                        Statistik Probabilitas,
                                                        Bahasa Inggris untuk Sistem Informasi,
                                                        Manajemen Proyek SI,
                                                        Pengantar Bisnis,
                                                        Perencanaan Sumber Daya Perusahaan, &
                                                        Statistika
                                                    </td>
                                                    <td>v</td>
                                                    <td>
                                                        E-Learning,
                                                        Jaringan Syaraf Tiruan, &
                                                        Keamanan Sistem Informasi
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Dr. Djuniadi, M. T.</td>
                                                    <td>40569</td>
                                                    <td class="text-center" colspan="2">S3</td>
                                                    <td>Komputer</td>
                                                    <td>v</td>
                                                    <td>Lektor Kepala</td>
                                                    <td>v</td>
                                                    <td></td>
                                                    <td>
                                                        Sistem Informasi Manajemen
                                                    </td>
                                                    <td>v</td>
                                                    <td>
                                                        Jaringan Komputer,
                                                        Keamanan Jaringan,
                                                        Logika Fuzzy,
                                                        Manajemen Jaringan Komunikasi, &
                                                        Praktik Manajemen Jaringan Komunikasi
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Dr. Feddy Setio Pribadi S.Pd., MT.</td>
                                                    <td>40814</td>
                                                    <td class="text-center" colspan="2">S3</td>
                                                    <td>Pemrograman Komputer</td>
                                                    <td>v</td>
                                                    <td>Lektor</td>
                                                    <td>v</td>
                                                    <td></td>
                                                    <td>
                                                        Manajemen Sains
                                                    </td>
                                                    <td>v</td>
                                                    <td>
                                                        Komputasi Bergerak,
                                                        Praktikum Rekayasa Perangkat Lunak, &
                                                        Rekayasa Perangkat Lunak
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