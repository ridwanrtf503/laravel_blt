@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Pengumuman</h1>
            <a href="{{ route('pengumuman.create') }}" class="btn btn-primary">Buat Pengumuman</a>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Judul</th>
                            <th scope="col">Periode</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengumuman as $data)
                            <tr>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->periode }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('pengumuman.show', ['pengumuman' => $data->id]) }}"
                                        class="btn btn-primary">Lihat</a>
                                    <a href="{{ route('pengumuman.edit', ['pengumuman' => $data->id]) }}"
                                        class="btn btn-success">Edit</a>
                                        <form action="{{ route('pengumuman.destroy', ['pengumuman' => $data->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                        
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
