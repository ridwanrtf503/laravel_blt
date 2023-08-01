@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Pengumuman</h1>

        <form action="{{ route('pengumuman.update', ['pengumuman' => $pengumuman->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $pengumuman->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="periode" class="form-label">Periode</label>
                <input type="text" class="form-control" id="periode" name="periode" value="{{ $pengumuman->periode }}" required>
            </div>

            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required>{{ $pengumuman->isi }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
