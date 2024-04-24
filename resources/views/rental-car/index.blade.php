@extends('layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Peminjaman Mobil</h1>

    {{-- Tombol Tambah --}}
    <a href="{{ route('rent-car.create') }}" class="btn btn-primary mb-3">Sewa Mobil</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Peminjaman Mobil</h6>
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

                        @foreach ($rentCar as $rent)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <th>{{ $rent->user->name }}</th>
                            <th>{{ $rent->tgl_mulai }}</th>
                            <th>{{ $rent->tgl_selesai }}</th>
                            <th>{{ $rent->car->merek }} - {{ $rent->car->model }}</th>
                            <th>{{ $rent->car->no_plat }}</th>
                            <th>
                                @if ($rent->car->status === 1)
                                    Tersedia
                                @else
                                    Sedang Disewa
                                @endif
                            </th>
                            {{-- <th>
                                <a href="#" class="btn btn-primary">Sewa Mobil</a>
                            </th> --}}
                        </tr>
                        @endforeach
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection


