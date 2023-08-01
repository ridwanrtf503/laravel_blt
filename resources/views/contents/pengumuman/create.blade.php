@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buat Pengumuman</h1>

        <form action="{{ route('pengumuman.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="periode">Periode:</label>
                <input type="text" name="periode" id="periode" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Pengumuman</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
