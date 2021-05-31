@extends('layout.operator')
@extends('layout.navbar')
@section('title','Cek Validasi LKPS | SIAPS FMIPA')
@section('content')

        <div id="content" class="container-fluid p-6">
            <div class="container-fluid px-lg-4">
                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Cetak dan Validasi LKPS</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">#007612</p>
                        </div>
                    </div>

                    <!-- kolom -->
                <div class="card-body">
                    <div class="col-md-12 mt-1">
                        <div class="alert" role="alert" id="note">
                            <h3 style="color: white;">Catatan!</h3>
                            <p>Data ini terakhir diambil dari Sistem Informasi Penelitian Pengabdian: 05 November 2020.</p>
                        </div>
                        
                        <div class="card">
                            <div class="card-body" id="isian">
                                <div class="d-md-flex align-items-center">
                                    <span><i class="icon ion-md-checkmark-circle ml-0 mr-2"></i></span>
                                    <div>
                                        <h4 class="card-title">Cetak dan Validasi LKPS</h4>
                                    </div>
                                </div>

                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kriteria</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Tata Pamong, Tata Kelola, dan Kerjasama</td>
                                        <td>Tata Pamong, Kelola, dan Kerjasama Tridharma di Unit Pengelola Program Studi</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success">Validasi</button>
                                                <button type="button" class="btn btn-danger">Batalkan</button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Mahasiswa</td>
                                        <td>Kualitas dan Mahasiswa Asing</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success">Validasi</button>
                                                <button type="button" class="btn btn-danger">Batalkan</button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>SDM</td>
                                        <td>Tentang Dosen Tetap Program Studi</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success">Validasi</button>
                                                <button type="button" class="btn btn-danger">Batalkan</button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">4</th>
                                        <td>Keuangan</td>
                                        <td>Laporan Penggunaan Dana Program Studi</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success">Validasi</button>
                                                <button type="button" class="btn btn-danger">Batalkan</button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">5</th>
                                        <td>Pendidikan</td>
                                        <td>Kurikulum, Integrasi Penelitian dan Pembelajaran, dan Kepuasan Mahasiswa</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success">Validasi</button>
                                                <button type="button" class="btn btn-danger">Batalkan</button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">6</th>
                                        <td>Penelitian</td>
                                        <td>Mengenai Penelitian DTPS</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success">Validasi</button>
                                                <button type="button" class="btn btn-danger">Batalkan</button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">7</th>
                                        <td>Pengabdian</td>
                                        <td>Mengenai Pengabdian DTPS</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success">Validasi</button>
                                                <button type="button" class="btn btn-danger">Batalkan</button>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th scope="row">8</th>
                                        <td>Luaran dan Capaian Tridharma</td>
                                        <td>Mengenai IPK, Prestasi, dan Lulusan Program Studi</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-success">Validasi</button>
                                                <button type="button" class="btn btn-danger">Batalkan</button>
                                            </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                </table>
                                <br>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Operator Program Studi</th>
                                            <th scope="col">Tanggal 5 November 2020</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">
                                                <div class="alert alert-secondary" role="alert" style="font-size: 12px;">
                                                    Melalui laman ini operator setuju untuk memvalidasi data dan siap dinilai dalam penilaian Internal Akreditasi Program Studi
                                                </div>
                                            </td>
                                            <td colspan="2">Tervalidasi</td>
                                            <td colspan="2">3</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Belum Tervalidasi</td>
                                            <td colspan="2">5</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td colspan="2">
                                                <button type="button" class="btn btn-info">Generate PDF</button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success">Kirim ke Evaluator</button>
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

@endsection