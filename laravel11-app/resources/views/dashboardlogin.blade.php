<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .container {
            width: 100%;
            max-width: 800px;
            border: 1px solid #ccc;
            padding: 20px;
        }
        
        .nav-bar {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .nav-bar a {
            text-decoration: none;
            color: #000;
            margin: 0 5px;
        }
        
        .login-form {
            border: 1px solid #ccc;
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }
        
        .login-form h2 {
            text-align: center;
            color: #555;
            margin-bottom: 30px;
        }

        .registration-form {
            border: 1px solid #ccc;
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }
        
        .registration-form h2 {
            text-align: center;
            color: #555;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .form-group label {
            width: 30%;
            text-align: right;
            padding-right: 15px;
        }
        
        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="email"] {
            width: 70%;
            padding: 8px;
            border: 1px solid #ccc;
        }
        
        .remember-me {
            margin-left: 30%;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-left: 30%;
            align-items: center;
        }
        
        .forgot-password {
            color: #0d6efd;
            text-decoration: none;
        }
        
        .login-button {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .footer {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav-bar">
            <a href="#">Home</a> | <a href="{{route('showlogin')}}">Đăng nhập</a> | <a href="{{route('showRegister')}}">Đăng ký</a>
        </div>
    @yield('content')
</body>
</html>