@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Pencairan</h1>
        
        <div class="card card-body">

            <a href="{{ route('pencairan.create') }}" class="btn btn-primary col-3">Tambah Pencairan</a>
            <form action="{{ route('pencairan.laporan') }}" method="POST" style="display: inline-block;">
                @csrf
                <button type="submit" class="btn btn-secondary">Cetak Semua</button>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Penerima</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pencairan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->penerima->masyarakat->nama }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->penerima->masyarakat->jumlah }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <form action="{{ route('pencairan.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pencairan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
