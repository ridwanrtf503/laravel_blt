@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Data Masyarakat</h1>
        <div class="mb-3">
            <a href="{{ route('masyarakat.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>

        <form action="{{ route('masyarakat.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="no_kk" class="form-label">No KK</label>
                <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="1234567890123456" required>
            </div>
            <div class="mb-3">
                <label for="no_rek" class="form-label">No Rek</label>
                <input type="text" class="form-control" id="no_rek" name="no_rek" placeholder="1234567890123456" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Noviardi" required>
            </div>
            <div class="mb-3">
                <label for="jenis_bantuan" class="form-label">Jenis Bantuan</label>
                <input type="text" class="form-control" id="jenis_bantuan" name="jenis_bantuan" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" pattern="[0-9]{1,3}(?:,?[0-9]{3})*(?:\.[0-9]{2})?" required title="Masukkan jumlah uang dalam format Rupiah (contoh: 10.000 atau 10,000.00)">
            </div>            
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
        </form>
    </div>
@endsection
