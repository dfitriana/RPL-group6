@extends('layout.operator')
@extends('layout.navbar')
@section('title','Pendidikan: Integrasi Penelitian/PKM dan Pembelajaran | SIAPS FMIPA')
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
                                                <a class="nav-link active" href="{{route('kurikulum')}}">Kurikulum</a>
                                            </li>
                                            <li class="nav-item" id="isian">
                                                <a class="nav-link active" href="{{route('integrasi')}}">Integrasi Penelitian/PKM dan Pembelajaran</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('kepuasan-mahasiswa')}}">Kepuasan Mahasiswa</a>
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
                                    Judul Penelitian/PkM DTPS yang terintegrasi ke dalam pembelajaran/pengembangan mata kuliah dalam 3 tahun terakhir tersaji pada Tabel berikut.
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Integrasi Penelitian/PKM dan Pembelajaran</a>
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
                                                    <th scope="col">Judul Penelitian/PKM</th>
                                                    <th scope="col">Nama Dosen</th>
                                                    <th scope="col">Mata Kuliah</th>
                                                    <th scope="col">Bentuk Integrasi</th>
                                                    <th scope="col">Tahun (YYYY)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        PENGEMBANGAN PERANGKAT LUNAK AUDIT MUTU 
                                                        INTERNAL DENGAN ISO 9001 PADA JURUSAN ILMU 
                                                        KOMPUTER UNIVERSITAS NEGERI SEMARANG
                                                    </td>
                                                    <td>
                                                        Much Aziz Muslim, 
                                                        Aji Purwinarko, 
                                                        Anggy Trisnawan 
                                                        Putra, Devi Ajeng 
                                                        Efrilianda
                                                    </td>
                                                    <td>Sistem Basis Data</td>
                                                    <td>
                                                        Penerapan Sistem Basis Data 
                                                        untuk perancangan penelitian
                                                    </td>
                                                    <td>2019</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Prototip Sistem Informasi Online Pendataan Kualitas 
                                                        Ternak Sapi Berbasis C-Means dan Fuzzy Tahani di 
                                                        Wilayah Kabupaten Semarang
                                                    </td>
                                                    <td>
                                                        Endang Sugiharti, 
                                                        Riza Arifudin, 
                                                        Anggyi Trisnawan 
                                                        Putra
                                                    </td>
                                                    <td>Pemrograman Web</td>
                                                    <td>
                                                        Luaran hasil penelitian yang 
                                                        berupa buku yang dapat 
                                                        digunakan sebagai referensi 
                                                        mahasiswa
                                                    </td>
                                                    <td>2018</td>
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