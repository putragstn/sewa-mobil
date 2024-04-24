@extends('layouts.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Mobil</h1>
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

    <form action="{{ route('manajemen-mobil.store') }}" method="POST">
        @csrf

        {{-- <div class="row"> --}}
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="merek"><strong>Merek:</strong></label>
                <input type="text" class="form-control" id="merek" name="merek">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="model"><strong>Model:</strong></label>
                <input type="text" class="form-control" id="model" name="model">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="no_plat"><strong>Nomer Plat:</strong></label>
                <input type="text" class="form-control" id="no_plat" name="no_plat">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="tarif_perhari"><strong>Tarif Sewa Perhari:</strong></label>
                <input type="text" class="form-control" id="tarif_perhari" name="tarif_perhari">
            </div>
        </div>

        {{-- Value Default Status --}}
        {{-- <input type="hidden" class="form-control" name="status" value="1"> --}}
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="status"><strong>Status:</strong></label>
                <select name="status" id="status" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="2">Sedang Disewa</option>
                </select>
            </div>
        </div>
        

        {{-- </div> --}}
        <div class="row mb-5 mt-3">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>

        
    </form>

</div>
<!-- /.container-fluid -->
@endsection