@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Profile</h1>

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label for="password"><i class="fas fa-lock"></i> New Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation"><i class="fas fa-lock"></i> Confirm New Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="form-group">
            <label for="current_password"><i class="fas fa-lock"></i> Current Password</label>
            <input type="password" class="form-control" id="current_password" name="current_password" required>
        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
    </form>
</div>
@endsection
