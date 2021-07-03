@extends('layout.evaluator')
@extends('layout.navbar')
@section('content')

<!-- <div id="content" class="container-fluid p-6"> -->
<br>
@foreach($users->unreadnotifications as $notif)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Perhatian!</strong> Anda mendapatkan tugas sebagai Evaluator Akreditasi Program Studi di {{$notif->data['data']['program_studi']}}
    <a href="{{route('eva-detail',$notif->id)}}" type="button" class="btn btn-light">Klik untuk lebih lanjut</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endforeach
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
<!-- </div> -->
@endsection