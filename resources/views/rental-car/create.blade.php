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

    <form action="{{ route('rent-car.store') }}" method="POST">
        @csrf

        {{-- <div class="row"> --}}
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        {{-- <input type="hidden" name="no_plat" value="{{  }}"> --}}

        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="tgl_mulai"><strong>Tanggal Mulai:</strong></label>
                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="tgl_selesai"><strong>Tanggal Selesai:</strong></label>
                <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="car_id"><strong>Mobil yang Tersedia:</strong></label>
                <select name="car_id" id="car_id" class="form-control">
                    @foreach ($cars as $car)
                        <option value="{{ $car->id }}">{{ $car->merek }} - {{ $car->model }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- </div> --}}
        <div class="row mb-5 mt-3">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Sewa</button>
            </div>
        </div>

        
    </form>

</div>
<!-- /.container-fluid -->
@endsection