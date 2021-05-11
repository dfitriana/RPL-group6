@extends('layout.admin')
@extends('layout.navbar')
@section('title','Penetapan Periode | SIAPS FMIPA')
@section('content')

<div class="col-md-12 mt-4">
    <div class="card">
        <div class="card-body" id="isian">
            <div class="d-md-flex align-items-center">
                <div>
                    <h3 class="card-title">Setting Periode Akreditasi</h3><br>
                </div>
            </div>
            <form action="{{route('setperiode',$kode_periode)}}" method="POST">
                {{csrf_field()}}
                <div class="mb-3">
                    <strong for="kode-periode" class="form-label">Kode Periode</strong>
                    <input class="form-control" name="kode_periode" type="text" value="{{$kode_periode}}" disabled>
                </div>
                <div class="mb-3">
                    <strong for="program-studi" class="form-label">Program Studi</strong>
                    <select class="form-control" name="program_studi"">
                    @foreach($prodi as $items)
                        <option value=" {{$items->nama_prodi}}">{{$items->kode}} {{$items->nama_prodi}}</option>
                        @endforeach
                    </select>
                </div>
                <strong for=" waktu" class="form-label">Waktu Periode Akreditasi</strong>
                <div class=" input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">O</span>
                    <input type="text" name="waktu" class="form-control" id="inp" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col3">
                            <div class="col9">
                                <input type="date" name="tglawal" id="tglawal" &nbsp;>
                                <input type="date" name="tglakhir" id="tglakhir">
                            </div>
                        </div>
                        <!-- </div> -->
                        <div class="col-3">
                            <div class="col-10">
                                <button type="button" onclick="cetak()" class="btn btn-success">Apply</button>
                                <button type="button" onclick="cancel()" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<script>
    function cetak() {
        var nama = document.getElementById("tglawal").value;
        var nam = document.getElementById("tglakhir").value;
        document.getElementById("inp").value = nama + " - " + nam;
    }

    function cancel() {
        document.getElementById("inp").value = " ";
        document.getElementById("tglawal").value = "Tanggal Awal";
        document.getElementById("tglakhir").value = "Tanggal Akhir";
    }
</script>

@endsection