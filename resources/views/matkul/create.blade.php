@extends('admin-theme._master')

@section('isi')


@if ($errors->any())
<div class="alert alert-danger" >
    <ul>
        @foreach ($errors->all() as $errors)
        <li>{{ $errors }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="row mt-4">
    <div class="col-6">
        <div class="card">
            <div class="card-header alert-secondary">Tambah Data
                <a class="btn btn-sm btn-info float-end" href="{{ url('Soal') }}" style="color: white;">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('Soal.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Matkul</label>
                        <input class="form-control mt-2" type="text" name="nama_mk" value="{{ old('nama_mk') }}"> 
                    </div>

                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input class="form-control mt-2" type="text" name="dosen" value="{{ old('dosen') }}">
                    </div>

                    <div class="form-group">
                        <label>Jumlah Soal</label>
                        <input class="form-control mt-2" type="text" name="jumlah_soal" value="{{ old('jumlah_soal') }}">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <input class="btn btn-primary mt-2" type="submit" name="submit" value="Simpan">
                    <a class="btn btn-danger float-right mt-2" href="{{ url('Soal') }}" style="color: white;">cancel</a>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection