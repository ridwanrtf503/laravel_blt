<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>

<body style="background-image: url('{{asset('loginxregis')}}/img/bg.jpeg')">
    <!-- resources/views/register.blade.php -->

    <!-- HTML -->
    <!-- resources/views/login.blade.php -->

    <!-- HTML -->
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf

        <h2 style="color: aquamarine">Login</h2>

        <div class="form-group">
            <label style="color: white" for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
            <label style="color: white" for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div class="button-container">
        <div class="button-container">
            <button style="color: white" type="submit">Login</button>
        </div>
        <div class="form-group">
            <p style="color: white">Don't have an account? <a style="color: aquamarine" href="{{ route('register') }}">Register here</a></p>
        </div>
    </form>


    

</body>

</html>
