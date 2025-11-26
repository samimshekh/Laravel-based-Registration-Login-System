<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dashboard-card {
            background: #fff;
            padding: 40px 35px;
            border-radius: 14px;
            width: 420px;
            max-width: 95%;
            box-shadow: 0 8px 22px rgba(0,0,0,0.12);
            transition: 0.3s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.18);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: 600;
            text-align: center;
        }

        .info-box {
            background: #f8f9fa;
            padding: 18px 15px;
            border-radius: 10px;
            margin-bottom: 25px;
            border-left: 4px solid #007bff;
        }

        .info-box p {
            font-size: 15px;
            margin-bottom: 10px;
            color: #444;
        }

        .info-box ul {
            list-style: none;
            padding-left: 0;
        }

        .info-box ul li {
            font-size: 15px;
            padding: 6px 0;
            border-bottom: 1px solid #e1e1e1;
        }

        .info-box ul li:last-child {
            border-bottom: none;
        }

        /* Logout Button */
        button {
            width: 100%;
            padding: 13px;
            background: #dc3545;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease;
            font-weight: 600;
        }

        button:hover {
            background: #b02a37;
            transform: translateY(-2px);
        }

        @media screen and (max-width: 400px) {
            .dashboard-card {
                padding: 30px 20px;
            }
        }

    </style>
</head>
<body>

<div class="dashboard-card">

    <h2>Welcome, {{ $user->username }}</h2>

    <div class="info-box">
        <p><strong>Your Information:</strong></p>

        <ul>
            <li><strong>User ID:</strong> {{ $user->id }}</li>
            <li><strong>Username:</strong> {{ $user->username }}</li>
            <li><strong>Created At:</strong> {{ $user->created_at }}</li>
        </ul>
    </div>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>

</div>

</body>
</html>
