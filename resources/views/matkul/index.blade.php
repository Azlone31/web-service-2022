@extends('admin-theme._master')

@section('isi')

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Data Soal
                <a class="btn btn-sm btn-primary float-right" href="{{ route('Soal.create') }}">Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Matakuliah</th>
                            <th>Nama Dosen</th>
                            <th>Jumlah Soal</th>
                            <th>Keterangan</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $datas)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $datas->nama_mk }}</td>
                            <td>{{ $datas->dosen }}</td>
                            <td>{{ $datas->jumlah_soal }}</td>
                            <td>{{ $datas->keterangan }}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection