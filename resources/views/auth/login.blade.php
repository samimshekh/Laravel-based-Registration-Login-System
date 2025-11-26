<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="login-card">
    <h2>Login</h2>

    @if ($errors->any())
        <div class="error-message">
            {{ implode(', ', $errors->all()) }}
        </div>
    @endif

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="text" name="username" placeholder="username" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <button type="submit">Login</button>
    </form>

    <a href="/register">Create Account</a>
</div>
</body>
</html>
