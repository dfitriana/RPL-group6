@extends('layout.admin')
@section('content')

<div class="col-md-12 mt-4">
    <div class="card">
        <div class="card-body" id="isian">
            <div class="d-md-flex align-items-center">
                <div>
                    <h3 class="card-title">Setting Periode Akreditasi</h3><br>
                </div>
            </div>
            <form action="" method="POST">
                {{csrf_field()}}
                <div class="mb-3">
                    <strong for="kode-periode" class="form-label">Kode Periode</strong>
                    <input class="form-control" name="kode_periode" type="text" value="" disabled>
                </div>
                <div class="mb-3">
                    <strong for="program-studi" class="form-label">Program Studi</strong>
                    <select class="form-control" name="program_studi"">
                    
                        <option></option>
                        <!-- <option>Sistem Informasi (S1)</option>
                        <option>Pendidikan Matematika (S1)</option>
                        <option>Matematika (S1)</option>
                        <option>Statistika Terapan dan Komputer (D3)</option>
                        <option>Pendidikan Fisika (S1)</option>
                        <option>Fisika (S1)</option> -->
                    
                    </select>
                </div>
                <strong for=" waktu" class="form-label">Waktu Periode Akreditasi</strong>
                        <div class=" input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">O</span>
                            <input type="text" name="waktu" class="form-control" id="inp" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="padtanggal">
                            <input type="date" name="tglawal" id="tglawal">
                            <input type="date" name="tglakhir" id="tglakhir">
                            <button type="button" onclick="cetak()" class="btn btn-success">Apply</button>
                            <button type="button" onclick="cancel()" class="btn btn-danger">Cancel</button>
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