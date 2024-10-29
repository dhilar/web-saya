<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .alert {
            margin-bottom: 15px;
        }
        .login-container .form-control {
            margin-bottom: 10px;
        }
        .login-container button {
            width: 100%;
        }
        .register-link {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login</h1>

        <!-- Display error messages if any -->
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <!-- Registration Link -->
        <div class="register-link">
            <p>Tidak Memiliki akun? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </div>

    <!-- Link Bootstrap 5 JS and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
