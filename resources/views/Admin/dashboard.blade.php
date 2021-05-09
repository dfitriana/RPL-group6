@extends('layout.admin')
@section('title','Home | SIAPS FMIPA')
@section('sapaan')
<div class="main__title">
    <img src="{{asset('assets/img/hello.svg')}}" alt="" />
    <div class="main__greeting">
        <h1>Hello!</h1>
        <p>Selamat datang, Habib Taqiyullah S. Pd., M. Pd.</p>
    </div>
</div>
@endsection
@section('content')
<section class="py-3">
    <div class="row">
        <div class="col-md-12 mt-lg-4 mt-2">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
        </div>

        <!-- buat nilai prodi -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">UNGGUL</h5>
                            <h1 class="display-5 mt-1 mb-3">71%</h1>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">BAIK</h5>
                            <h1 class="display-5 mt-1 mb-3">7%</h1>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">CUKUP</h5>
                            <h1 class="display-5 mt-1 mb-3">0%</h1>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">PROGRAM STUDI BARU</h5>
                            <h1 class="display-5 mt-1 mb-3">21%</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- kolom -->
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-body" id="isian">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Periode Akreditasi</h4>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Kode Periode</th>
                                <th class="border-top-0">Program Studi</th>
                                <th class="border-top-0"></th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0"></th>
                                <th class="border-top-0">Data</th>
                                <th class="border-top-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1842</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Sistem Informasi (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-success" id="status">Shipped</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1843</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Pendidikan Matematika (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1844</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Matematika (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1845</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Statistika Terapan dan Komputasi (D3)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1846</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Pendidikan Fisika (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1847</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Fisika (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1848</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Pendidikan Kimia (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1849</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Farmasi (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1850</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Kimia (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1851</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Pendidikan Biologi (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1852</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Biologi (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="kode">
                                            <h4 class="m-b-0 font-16" id="koper">OR1853</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>Ilmu Lingkungan (S1)</td>
                                <td></td>
                                <td>
                                    <span class="badge badge-warning" id="status">Pending</span>
                                </td>
                                <td></td>
                                <td>
                                    <!-- isian data -->
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection