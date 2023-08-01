@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Data Penerima</h1>

        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" value="{{ $penerima->masyarakat->nama }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="no_kk" class="form-label">No KK</label>
                    <input type="text" class="form-control" id="no_kk" value="{{ $penerima->masyarakat->no_kk }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="no_rek" class="form-label">No Rek</label>
                    <input type="text" class="form-control" id="no_rek" value="{{ $penerima->masyarakat->no_rek }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="jenis_bantuan" class="form-label">Jenis Bantuan</label>
                    <input type="text" class="form-control" id="jenis_bantuan" value="{{ $penerima->masyarakat->jenis_bantuan }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keterangan" readonly>{{ $penerima->keterangan }}</textarea>
                </div>

                <a href="{{ route('penerima.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
