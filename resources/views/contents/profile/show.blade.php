@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Profile</h1>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                </table>
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>
@endsection
