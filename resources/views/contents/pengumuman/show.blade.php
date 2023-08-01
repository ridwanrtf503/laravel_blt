@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2>{{ $pengumuman->judul }}</h2>
                <p>Penulis: {{ $pengumuman->nama }}</p>
                <p>Periode: {{ $pengumuman->periode }}</p>
                <p>Tanggal: {{ $pengumuman->created_at->format('d/m/Y H:i') }}</p>
                <p>{{ $pengumuman->isi }}</p>
                <a href="{{ route('pengumuman.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
