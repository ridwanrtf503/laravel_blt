@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Penerima</h1>

        <form action="{{ route('penerima.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="masyarakat_id">Nama Masyarakat</label>
                <select class="form-control" id="masyarakat_id" name="masyarakat_id">
                    @foreach ($masyarakat as $m)
                        <option value="{{ $m->id }}">{{ $m->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="keterangan1" name="keterangan[]" value="Penerima">
                    <label class="form-check-label" for="keterangan1">Penerima</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="keterangan2" name="keterangan[]" value="Bukan Penerima">
                    <label class="form-check-label" for="keterangan2">Bukan Penerima</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('penerima.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
