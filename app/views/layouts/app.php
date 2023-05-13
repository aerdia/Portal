// app/views/layouts/app.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My App</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/login">Login</a>
        <a href="/registration">Registration</a>
        @if (Auth::check())
            <a href="/admin">Admin</a>
        @endif
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
