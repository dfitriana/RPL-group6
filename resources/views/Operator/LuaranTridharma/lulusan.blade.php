@extends('layout.operator')
@extends('layout.navbar')
@section('title','Luaran dan Capaian Tri Dharma: Lulusan | SIAPS FMIPA')
@section('content')
        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Luaran dan Capaian Tri Dharma</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">DTPS</p>
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
                                                <a class="nav-link active" href="{{route('ipk-lulusan')}}">IPK Lulusan</a>
                                            </li>
                                            <li class="nav-item" id="scnd">
                                                <a class="nav-link active" href="{{route('prestasi-akademik-mhs')}}">Prestasi Akademik Mahasiswa</a>
                                            </li>
                                            <li class="nav-item"  id="scnd">
                                                <a class="nav-link active" href="{{route('prestasi-nonakademik-mhs')}}">Prestasi non Akademik Mahasiswa</a>
                                            </li>
                                            <li class="nav-item"  id="isian">
                                                <a class="nav-link active" href="{{route('lulusan')}}">Lulusan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center" id="isian"></div>
                            </div>
                            
                            <div class="card-body">
                                <div class="alert" role="alert" id="note">
                                    <h3 style="color: white;">Catatan!</h3>
                                    <p>Data ini terakhir diambil dari Sistem Informasi Penelitian Pengabdian: 05 November 2020.</p>
                                </div>
                                
                                <div class="alert alert-secondary" role="alert">
                                    Prestasi akademik yang dicapai mahasiswa program studi dalam 5 tahun terakhir tersaji pada Tabel berikut
                                </div>

                                <nav class="navbar navbar-light">
                                    <a class="navbar-brand">Lulusan Program Studi</a>
                                    <form class="form-inline">
                                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection