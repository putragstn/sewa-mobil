@extends('layouts.main')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Mobil</h1>

    {{-- Tombol Tambah --}}
    <a href="{{ route('manajemen-mobil.create') }}" class="btn btn-primary mb-3">Tambah Data Mobil</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Mobil</h6>
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
                            <th>Merek</th>
                            <th>Model</th>
                            <th>Nomer Plat</th>
                            <th>Tarif Sewa Perhari</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $car->merek }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->no_plat }}</td>
                                <td>{{ $car->tarif_perhari }}</td>
                                <td>
                                    @if ($car->status === 1)
                                        Tersedia
                                    @else
                                        Sedang Disewa
                                    @endif
                                </td>
                                {{-- <td>
                                    <a href="#" class="btn btn-primary">Ubah</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection


