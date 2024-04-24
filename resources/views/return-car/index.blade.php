@extends('layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pengembalian Mobil</h1>

    {{-- Tombol Tambah --}}
    {{-- <a href="{{ route('return-car.create') }}" class="btn btn-primary mb-3">Kembalikan Mobil</a> --}}
    
    <form action="return-car/search" method="GET">
        <input type="text" name="search" placeholder="Nomer Plat Mobil">
        <button type="submit">Kembalikan Mobil</button>
    </form>
    {{-- <a href="{{ route('return-car.create') }}" class="btn btn-primary mb-3">Kembalikan Mobil</a> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengembalian Mobil</h6>
        </div>
        <div class="card-body">

            {{-- Alert / Notifikasi --}}
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pengguna</th>
                            <th>Tgl Mulai</th>
                            <th>Tgl Selesai</th>
                            <th>Merek - Model</th>
                            <th>Nomer Plat</th>
                            <th>Status</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>

                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection


