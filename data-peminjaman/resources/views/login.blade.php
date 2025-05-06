<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #ffa2c0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .login-header {
            background-color: white;
            border-bottom: none;
            padding: 30px 20px 10px;
            text-align: center;
        }
        .login-body {
            padding: 30px;
            background-color: white;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
        .welcome-text {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }
        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #ffa2c0;
        }
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        .btn-login {
            background-color: #ff6b9d;
            border: none;
            padding: 12px;
            font-weight: 600;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }
        .btn-login:hover {
            background-color: #ff4d88;
        }
        .btn-login:active,
        .btn-login:focus {
            background-color: #87CEEB !important;
            box-shadow: none !important;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <div class="logo">BORROWIES BOOK</div>
            <h5 class="welcome-text">Hello, borrowies friends!</h5>
        </div>
        <div class="login-body">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3 password-input-container">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="***********" required>
                </div>
                <div class="remember-forgot">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none" style="color: #ff6b9d;">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100 btn-login">Login</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
