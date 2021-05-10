@extends('layout.operator')
@section('content')

<!-- Page Content -->
        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">
                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Program Studi Sistem Informasi</h1>
                        </div>
                    </div>

                    <!-- kolom -->
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-body" id="isian">
                                <div class="card text-center">
                                    <div class="card-header" style="background-color: white;">
                                      <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item" id="isian">
                                          <a class="nav-link active" href="{{route('profil-pengusul')}}">Profil Pengusul</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{route('edit-profil-pengusul')}}" id="scnd">Edit Profil Pengusul</a>
                                        </li>
                                      </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">IDENTITAS PENGUSUL</h1>
                                </div>
                                <table class="table v-middle">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Perguruan Tinggi</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="card-text">:</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <p class="card-text">Universitas Negeri Semarang</p>
                                            </td>
                                            <td></td>
                                            <td> </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Unit Pengelola Program Studi</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="card-text">:</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <p class="card-text">Fakultas Matematika dan Ilmu Pengetahuan Alam</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Jenis Program</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="card-text">:</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <p class="card-text">Sarjana (S1)</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Perguruan Tinggi</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="card-text">:</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <p class="card-text">Universitas Negeri Semarang</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Nama Program Studi</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="card-text">:</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <p class="card-text">Sistem Informasi</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Alamat</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="card-text">:</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <p class="card-text">Kampus Sekaran</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Nomor Telepon</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="card-text">:</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <p class="card-text">(024) 8508032</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Email dan Website</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="card-text">:</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <p class="card-text">ilkom@mail.unnes.ac.id dan ilkom.unnes.ac.id</p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Nomor SK Pendirian PT</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="card-text">:</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <p class="card-text"></p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Tanggal SK Pendirian PT</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="card-text">:</p>
                                            </td>
                                            <td></td>
                                            <td>
                                                <p class="card-text"></p>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<!-- Fin Page Content -->
@endsection