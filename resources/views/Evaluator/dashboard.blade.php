@extends('layout.evaluator')
@section('content')


        <div id="content" class="container-fluid p-6">
            <br>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Perhatian!</strong> Anda mendapatkan tugas sebagai Evaluator Akreditasi Program Studi di Program Studi Sistem Informasi
                <button type="button" class="btn btn-light">Klik untuk lebih lanjut</button>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="container-fluid px-lg-4">

                <div class="row">
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <h1 class="h3 mb-0 text-gray-800">Halaman Awal SIAPS</h1>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-1">
                            <p style="color: rgb(145, 145, 145);">Version ...</p>
                        </div>
                    </div>

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
                    
                </div>
            </div>
        </div>
@endsection