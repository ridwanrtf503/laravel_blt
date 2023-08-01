<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
</head>

<body style="background-image: url('{{asset('loginxregis')}}/img/bg.jpeg')">
    <!-- resources/views/register.blade.php -->

    <!-- HTML -->
    <!-- HTML -->
    <!-- HTML -->
    <form class="register-form" method="POST" action="{{ route('register') }}">
        @csrf

        <h2>Register</h2>
        <!-- Tampilkan pesan error -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div class="button-container">

          <button type="submit">Register</button>
        </div>
        <div class="form-group">
          <p>Sudah punya akun? <a class="link" href="{{ route('login') }}">Login</a></p>
        </div>
    </form>


</body>

</html>
