@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-3">
            <a href="{{ route('masyarakat.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>

        <h1>Edit Data Masyarakat</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('masyarakat.update', $masyarakat->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="no_kk" class="form-label">Nomor KK</label>
                        <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{ $masyarakat->no_kk }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="no_rek" class="form-label">Nomor Rekening</label>
                        <input type="text" class="form-control" id="no_rek" name="no_rek" value="{{ $masyarakat->no_rek }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $masyarakat->nama }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="jenis_bantuan" class="form-label">Jenis Bantuan</label>
                        <input type="text" class="form-control" id="jenis_bantuan" name="jenis_bantuan" value="{{ $masyarakat->jenis_bantuan }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $masyarakat->jumlah }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
