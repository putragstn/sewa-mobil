@extends('layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sewa Mobil</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif 

    <form action="{{ route('return-car.store') }}" method="POST">
        @csrf

        {{-- <div class="row"> --}}
        {{-- <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> --}}

        @foreach ($results as $car)
            
        @endforeach
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="merek"><strong>Merek</strong></label>
                <input type="text" class="form-control" id="merek" name="merek" value="{{ $car->merek }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="model"><strong>Model</strong></label>
                <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="no_plat"><strong>Model</strong></label>
                <input type="text" class="form-control" id="no_plat" name="no_plat" value="{{ $car->no_plat }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="tari_perhari"><strong>Tarif Sewa Perhari</strong></label>
                <input type="text" class="form-control" id="tari_perhari" name="tari_perhari" value="{{ $car->tarif_perhari }}">
            </div>
        </div>

        {{-- <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="tari_perhari"><strong>Tarif Sewa Perhari</strong></label>
                <input type="text" class="form-control" id="tari_perhari" name="tari_perhari" value="{{ $car->rental->tgl_mulai }}">
            </div>
        </div> --}}

        {{-- </div> --}}
        <div class="row mb-5 mt-3">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Kembalikan</button>
            </div>
        </div>

        
    </form>

</div>
<!-- /.container-fluid -->
@endsection