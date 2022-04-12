@extends('admin-theme._master')

@section('isi')

<div class="row mt-4">
    <div class="col-12">
        <div class="card border-primary">
            <div class="card-header">Data Soal
                <a class="btn btn-sm float-end btn-primary" href="{{ route('Soal.create') }}" >Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered border-primary">
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
                            <td>
                                <form action="{{ route('delete.soal', $datas->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection