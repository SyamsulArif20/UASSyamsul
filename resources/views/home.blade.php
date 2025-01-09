<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JNT Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav {
            display: flex;
            gap: 15px;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        main {
            padding: 20px;
        }
        .welcome-message {
            margin-top: 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>JNT Application</h1>
        <nav>
            <a href="{{ route('customers.index') }}">Customers</a>
            <a href="{{ route('packages.index') }}">Packages</a>
            <a href="{{ route('drivers.index') }}">Drivers</a>
            <a href="{{ route('branches.index') }}">Branches</a>
            <a href="{{ route('transactions.index') }}">Transactions</a>
        </nav>
    </header>
    <main>
        <div class="welcome-message">
            Selamat datang di website JNT Samsul Maarif
        </div>
        @yield('content')
    </main>
</body>
</html>