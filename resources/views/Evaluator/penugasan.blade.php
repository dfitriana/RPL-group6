@extends('layout.evaluator')
@extends('layout.navbar')
@section('title','Penugasan | SIAPS FMIPA')
@section('content')
<br>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    @foreach($notifs as $notif)
    <strong>Perhatian!</strong> Anda mendapatkan tugas sebagai Evaluator Akreditasi Program Studi di Program Studi {{$notif->data['data']['program_studi']}}
    <button type="button" class="btn btn-light">Klik untuk lebih lanjut</button>
    @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="container-fluid px-lg-4">

    <div class="row">
        <div class="col-md-12 mt-lg-4 mt-4">
            <div class="d-sm-flex align-items-center justify-content-between mb-1">
                <h1 class="h3 mb-0 text-gray-800">Penugasan</h1>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-1">
                <p style="color: rgb(145, 145, 145);">Akreditasi Program Studi</p>
            </div>
        </div>

        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body" id="isian">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Penugasan</h4>
                        </div>
                    </div>
                    @foreach($notifs as $notif)
                    <div class="text-center">
                        <h6 style="font-size: 14; font-weight: normal;">Anda Ditugasi oleh Gugus Penjamin Mutu untuk Melakukan Evaluasi Pada Program Studi {{$notif->data['data']['program_studi']}}</h4>
                            <h6 style="font-size: 14; font-weight: normal;">Apakah Anda menerima? Apabila anda menerima silahkan tekan tombol setuju untuk melanjutkan</h4>
                                @endforeach
                    </div>
                    <br>
                    <div>
                        <button type="button" class="btn btn-success">Setujui</button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger text-right" data-toggle="modal" data-target="#exampleModal" style="float: right;">
                            Tolak
                        </button>

                        <!-- Modal -->
                        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="border-top: #ff0000 solid 5px;">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Penolakan Menjadi Evaluator</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Alasan Penolakan:</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-danger">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- kolom -->

    </div>
</div>
@endsection