@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Data Penerima</h1>

        <form action="{{ route('penerima.update', ['penerima' => $penerima->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="masyarakat_id" class="form-label">Masyarakat</label>
                <select class="form-select" id="masyarakat_id" name="masyarakat_id" required>
                    <option value="">Pilih Masyarakat</option>
                    @foreach ($masyarakat as $data)
                        <option value="{{ $data->id }}" {{ $data->id == $penerima->masyarakat_id ? 'selected' : '' }}>{{ $data->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="5">{{ $penerima->keterangan }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('penerima.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
