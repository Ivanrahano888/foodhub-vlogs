<<<<<<< HEAD
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
<div class="container p-5 m-5">
    <h1 class="fw-bold">🍜 Foodhub Vlogs</h1>
    <p>This is home page</p>
    <button onclick="location.href='{{ url('register') }}'">Register</button>
    <button onclick="location.href='{{ url('login') }}'">Login</button>
</body>
</html>
>>>>>>> edfa13072f4159bbe4372570fad9c8279e769c68
