@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Data Masyarakat</h1>
            <a href="{{ route('masyarakat.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No KK</th>
                            <th scope="col">No Rek</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Bantuan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($masyarakat as $data)
                            <tr>
                                <td>{{ $data->no_kk }}</td>
                                <td>{{ $data->no_rek }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->jenis_bantuan }}</td>
                                <td>{{ number_format($data->jumlah, 2) }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Action Buttons">
                                        <a href="{{ route('masyarakat.edit', ['id' => $data->id]) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('masyarakat.destroy', ['id' => $data->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                        <a href="{{route('masyarakat.show', ['id' => $data->id])}}" class="btn btn-info">Lihat</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
