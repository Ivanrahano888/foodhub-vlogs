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

    <button onclick="location.href='{{ url('about') }}'">About our Team</button>
    <button onclick="location.href='{{ url('explore') }}'">Explore</button>
    <button onclick="location.href='{{ url('register') }}'">Register</button>
    <button onclick="location.href='{{ url('login') }}'">Login</button>
</body>
</html>