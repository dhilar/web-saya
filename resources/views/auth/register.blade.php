<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .register-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .register-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .alert {
            margin-bottom: 15px;
        }
        .register-container .form-control {
            margin-bottom: 10px;
        }
        .register-container button {
            width: 100%;
        }
        .login-link {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h1>Register</h1>

        <!-- Display success messages if any -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Registration Form -->
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        <!-- Login Link -->
        <div class="login-link">
            <p>Sudah Punya Akun? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>

    <!-- Link Bootstrap 5 JS and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
