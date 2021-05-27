@extends('layout.operator')
@extends('layout.navbar')
@section('title','Profil Pengusul - Operator | SIAPS FMIPA')
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
                                    <h1 class="h3 mb-0 text-gray-800" style="font-size: 25px;">IDENTITAS PENGUSUL</h1>
                                </div>
                                <table class="table v-middle">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Perguruan Tinggi</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">Universitas Negeri Semarang</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Unit Pengelola Program Studi</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">Fakultas Matematika dan Ilmu Pengetahuan Alam</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Jenis Program</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">Sarjana (S1)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Perguruan Tinggi</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">Universitas Negeri Semarang</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Nama Program Studi</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">Sistem Informasi</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Alamat</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">Kampus Sekaran</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Nomor Telepon</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">(024) 8508032</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Email dan Website</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">ilkom@mail.unnes.ac.id dan ilkom.unnes.ac.id</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Nomor SK Pendirian PT</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Tanggal SK Pendirian PT</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text"></p>
                                            </td>
                                        </tr>
                                        <!-- dari sini -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Pejabat Penandatangan SK Pendirian PT</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">Presiden Republik Indonesia</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Nomor SK Pembukaan PS</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">SK Menristekdikti RI No. 111/KPT/I/2018</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Tanggal SK Pembukaan PS</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">2 Februari 2018</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Pejabat Penandatangan SK </p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">Sekjen a.n. Menristekdikti RI</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Pejabat Penandatangan SK Pembukaan PS</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">Sekjen a.n. Menristekdikti RI</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Tahun Pertama Kali Menerima Mahasiswa</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">2018</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Peringkat Terbaru Akreditasi PS</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <p class="card-text">Nomor SK BAN-PT</p>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <p class="card-text">:</p>
                                            </td>
                                            <td colspan="4">
                                                <p class="card-text">-</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<!-- Fin Page Content -->
@endsection