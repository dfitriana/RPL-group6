@extends('layout.operator')
@extends('layout.navbar')
@section('title','Kerjasama: Penelitian | SIAPS FMIPA')
@section('content')

<div id="content" class="container-fluid p-6">
    <div class="container-fluid px-lg-4">

        <div class="row">
            <div class="col-md-12 mt-lg-4 mt-4">
                <div class="d-sm-flex align-items-center justify-content-between mb-1">
                    <h1 class="h3 mb-0 text-gray-800">Kerjasama</h1>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-1">
                    <p style="color: rgb(145, 145, 145);">Data Kerjasama Program Studi</p>
                </div>
            </div>

            <!-- kolom -->
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card text-center">
                            <div class="card-header" style="background-color: white;">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item" id="scnd">
                                        <a class="nav-link active" href="{{route('kerjasama-pendidikan')}}">Kerjasama Pendidikan</a>
                                    </li>
                                    <li class="nav-item" id="scnd">
                                        <a class="nav-link active" href="{{route('kerjasama-penelitian')}}" id="isian">Kerjasama Penelitian</a>
                                    </li>
                                    <li class="nav-item" id="scnd">
                                        <a class="nav-link active" href="{{route('kerjasama-pengabdian')}}">Kerjasama Pengabdian</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center" id="isian"></div>
                    </div>

                    <div class="card-body">
                        <div class="alert" role="alert" id="note">
                            <h3 style="color: white;">Catatan!</h3>
                            <p>Data ini terakhir diambil pada Sistem Kerjasama pada 05 November 2020.</p>
                        </div>

                        <nav class="navbar navbar-light">
                            <a class="navbar-brand">Kerjasama Penelitian</a>
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </nav>
                        <br><br>

                        <table class="table v-middle">
                            <div class="table-responsive-xl">
                                <table class="table table-borderless table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" rowspan="2">No.</th>
                                            <th scope="col" rowspan="2">Lembaga Mitra</th>
                                            <th scope="col" colspan="3">Tingkat *)</th>
                                            <th scope="col" rowspan="2">Judul Kegiatan Kerjasama</th>
                                            <th scope="col" rowspan="2">Manfaat bagi PS yang Diakreditasi</th>
                                            <th scope="col" rowspan="2">Waktu & Durasi</th>
                                            <th scope="col" rowspan="2">Bukti Kerjasama</th>
                                            <th scope="col" rowspan="2">Tahun Berakhirnya Kerjasama (YYYY)</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Internasional</th>
                                            <th scope="col">Nasional</th>
                                            <th scope="col">Wilayah/Lokal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $items)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$items->lembaga_mitra}}</td>
                                            @if($items->tingkat=='Internasional')
                                            <td class="text-center">v</td>
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            @elseif($items->tingkat=='Nasional')
                                            <td class="text-center"></td>
                                            <td class="text-center">v</td>
                                            <td class="text-center"></td>
                                            @elseif($items->tingkat=='Wilayah/Lokal')
                                            <td class="text-center"></td>
                                            <td class="text-center"></td>
                                            <td class="text-center">v</td>
                                            @endif
                                            <td>{{$items->judul_kegiatan}}</td>
                                            <td>{{$items->manfaat}}</td>
                                            <td>{{$items->waktu_durasi}}</td>
                                            <td>{{$items->bukti_kerjasama}}</td>
                                            <td>{{$items->tahun_berakhir}}</td>
                                        </tr>
                                        @endforeach
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