<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Fredoka', sans-serif;
        }

        .login-card {
            border: none;
            border-radius: 15px;
        }

        .btn-custom {
            background: #6b3e2e;
            color: white;
        }

        .btn-custom:hover {
            background: #4e2d22;
            color: white;
        }
    </style>
</head>

<body>
@include('header')
<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow login-card">

                <div class="card-body p-5">

                    <h2 class="text-center mb-4 fw-bold">
                        Login
                    </h2>

                    <!-- SUCCESS MESSAGE -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- ERROR MESSAGE -->
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.user') }}">

                        @csrf

                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label>Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   required>
                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-4">
                            <label>Password</label>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>
                        </div>

                        <!-- BUTTON -->
                        <button type="submit"
                                class="btn btn-custom w-100 py-2">

                            Login
                        </button>

                    </form>

                    <div class="text-center mt-4">
                        Don't have an account?

                        <a href="{{ route('register') }}"
                           class="text-decoration-none fw-bold">

                            Register
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@include('footer')
</body>

</html>