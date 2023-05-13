// app/views/home.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    @if (Auth::check())
        <p>You are logged in as {{ Auth::user()->username }}</p>
    @else
        <p>You are not logged in.</p>
    @endif
    <a href="/login">Login</a>
    <a href="/registration">Registration</a>
</body>
</html>
