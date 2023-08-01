@extends('layouts.app')

@section('content')
  <div class="container-fluid text-light">
    <h1 class="mb-4 text-center " >Selamat Datang {{Auth::user()->name}}</h1>
    <div class="row">
      <p class="text-center text-blue">Thank you for visiting our application. Explore and enjoy the features we offer!</p>
    </div>
  </div>
@endsection
