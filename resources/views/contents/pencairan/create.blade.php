@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Pencairan</h1>
        <div class="mb-3">
            <a href="{{ route('masyarakat.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <form action="{{ route('pencairan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="penerima_id">Penerima</label>
                <select name="penerima_id" id="penerima_id" class="form-control">
                    <option value="">Pilih Penerima</option>
                    @foreach ($penerima as $data)
                        <option value="{{ $data->id }}">{{ $data->masyarakat->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pencairan">Tanggal</label>
                <input type="date" name="tanggal_pencairan" id="tanggal_pencairan" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="">Select Status</option>
                    <option value="Sudah Cair">Siap Cair</option>
                    <option value="Belum Cair">Belum Cair</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
