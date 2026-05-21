<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            background: black;
            color: white;
            border: none;
            cursor: pointer;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="login-box">

        <h2>Admin Login</h2>

        @if(session('error'))
        <p class="error">{{ session('error') }}</p>
        @endif

        <form method="POST" action="/admin/login">
            @csrf

            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>

    </div>

</body>

</html>