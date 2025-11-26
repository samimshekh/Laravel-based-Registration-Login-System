<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="login-card">
    <h2>Register</h2>

    @if ($errors->any())
        <div class="error-message">
            {{ implode(', ', $errors->all()) }}
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf
        <input type="text" name="username" placeholder="username"  required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <button type="submit">Register</button>
    </form>

    <a href="/login">Already have an account? Login</a>
</div>
</body>
</html>
