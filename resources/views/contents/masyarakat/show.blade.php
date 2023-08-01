@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Data Masyarakat</h1>
        <div class="mb-3">
            <a href="{{ route('masyarakat.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">No KK: {{ $masyarakat->no_kk }}</h5>
                <h5 class="card-title">No Rek: {{ $masyarakat->no_rek }}</h5>
                <h5 class="card-title">Nama: {{ $masyarakat->nama }}</h5>
                <h5 class="card-title">Jenis Bantuan: {{ $masyarakat->jenis_bantuan }}</h5>
                <h5 class="card-title">Jumlah: {{ number_format($masyarakat->jumlah, 2) }}</h5>
            </div>
        </div>
    </div>
@endsection
