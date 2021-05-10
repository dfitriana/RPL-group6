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
                        <div class="row">
                            <div class="col-sm-3" >
                                <div class="card" id="isian">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <form class="text-center">
                                                <div class="col-md-13 text-center">
                                                    <h3 style="font-size: 19px;">Sistem Informasi (S1)</h3>
                                                </div>
                                            </form>
                                        </div>
                                        <br>
                                        <p class="text-center" id="stat">Status Pengajuan Akreditasi (Aktif)</p>
                                        <table class="table v-middle">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <p class="kulit">Akreditasi Saat Ini</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="kacang">- (Belum Terakreditasi)</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <p class="kulit">Jumlah Mahasiswa</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="kacang">133</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <p class="kulit">Jenjang</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="kacang">S1</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-success">Aktif Diakreditasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="card">
                                    <div class="card-header text-center" style="background-color: white;">
                                        <ul class="nav nav-tabs card-header-tabs">
                                          <li class="nav-item" id="isian">
                                            <a class="nav-link active" href="#">Kerjasama</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#" id="scnd">Mahasiswa</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#" id="scnd">SDM</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#" id="scnd">Keuangan Sarpras</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#" id="scnd">Pendidikan</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#" id="scnd">Penelitian</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#" id="scnd">PKM</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#" id="scnd">Luaran & Capaian Tridharma</a>
                                          </li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <div class="alert" role="alert" id="note">
                                            <h3 style="color: white;">Tips!</h3>
                                            <p>Generate Data Kerjasama dapat dilakukan dengan klik tombol ambil data Sistem Kerjasama</p>
                                        </div>
                                        <br>
                                        <table class="table v-middle">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <p class="card-text">No.</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="card-text text-center">Jenis Kerjasama</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <p class="card-text">Grafik</p>
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <p class="card-text">Jumlah</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <p class="card-text">1.</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="card-text">Kerjasama Pendidikan</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <p class="card-text">11</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <p class="card-text">2.</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="card-text">Kerjasama Penelitian</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <p class="card-text">12</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <p class="card-text">3.</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="card-text">Kerjasama Pengabdian Kepada Masyarakat</p>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <p class="card-text">4</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-right">
                                            <button type="button" class="btn" style="background-color: #00BEEB;color: white;">Ambil Data Sistem Kerjasama</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3" >
                                <div class="card" id="isian">
                                    <div class="card-body">
                                        <div>
                                            <h1 style="color: rgb(116, 116, 117); font-size: 23;">Tentang Prodi</h1>
                                        </div>
                                        <br>
                                        <table class="table v-middle">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <p class="kulit">Non Pendidikan</p>
                                                            <p>Jurusan Ilmu Komputer Fakultas Matematika dan Ilmu Pengetahuan Alam</p>
                                                        </div> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <p class="kulit">Lokasi</p>
                                                            <p>Gedung D5 Kampus Unnes Sekaran Gunung Pati</p>
                                                        </div> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <p class="kulit">Bidang Ilmu</p>
                                                            <p>Ilmu Komputer</p>
                                                        </div> 
                                                    </td>
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

<!-- Fin Page Content -->
@endsection