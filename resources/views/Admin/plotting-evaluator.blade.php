@extends('layout.admin')
@extends('layout.navbar')
@section('content')
<div class="col-md-12 mt-4">
    <div class="card">
        <div class="card-body" id="isian">
            <div class="d-md-flex align-items-center">
                <div>
                    <h4 class="card-title">Plotting Evaluator</h4>
                </div>
            </div>

            <form action="{{route('savedata')}}" method="POST">
                {{csrf_field()}}
                <div class="mb-3">
                    <strong for="kode-periode" class="form-label">Kode Periode</strong>

                    <input class="form-control" name="kode-periode" type="text" value="{{$idperiode}}" disabled>

                </div>

                <div class="mb-3">
                    <strong for="prodi" class="form-label">Progam Studi</strong>
                    <input class="form-control" name="prodi" type="text" value="{{$periodes->program_studi}}" disabled>

                </div>

                <div class="mb-3">
                    <strong for="eva-enter-1" class="form-label">Evaluator Internal 1</strong>
                    <select class="form-control" name="eva-enter-1">
                        @foreach($evaluator as $eva)
                        <option>{{$eva->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <strong for="eva-enter-1" class="form-label">Evaluator Internal 1</strong>
                    <select class="form-control" name="eva-enter-1">
                        @foreach($evaluator as $eva)
                        <option>{{$eva->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <strong for="eva-enter-1" class="form-label">Evaluator Internal 1</strong>
                    <select class="form-control" name="eva-enter-1">
                        @foreach($evaluator as $eva)
                        <option>{{$eva->nama}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection