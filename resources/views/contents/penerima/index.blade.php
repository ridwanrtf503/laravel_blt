@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Data Penerima</h1>
            <a href="{{ route('penerima.create') }}" class="btn btn-primary">Tambah Data</a>
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
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penerima as $data)
                            <tr>
                                <td>{{ $data->masyarakat->no_kk }}</td>
                                <td>{{ $data->masyarakat->no_rek }}</td>
                                <td>{{ $data->masyarakat->nama }}</td>
                                <td>{{ $data->masyarakat->jenis_bantuan }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Action Buttons">
                                        <form action="{{ route('penerima.destroy', ['penerima' => $data->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
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
