@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Laporan Pencairan</h1>

        <table class="table" style="background-color: beige">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Penerima</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Status</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
