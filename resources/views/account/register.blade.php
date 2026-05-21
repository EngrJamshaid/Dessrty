<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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

        .register-card {
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

        <div class="col-md-7">

            <div class="card shadow register-card">

                <div class="card-body p-5">

                    <h2 class="text-center mb-4 fw-bold">
                        Create Account
                    </h2>

                    <form method="POST" action="{{ route('register.user') }}">

                        @csrf

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   required>
                        </div>

                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   required>
                        </div>

                        <!-- PHONE -->
                        <div class="mb-3">
                            <label class="form-label">Phone</label>

                            <input type="text"
                                   name="phone"
                                   class="form-control"
                                   required>
                        </div>

                        <!-- ADDRESS -->
                        <div class="mb-3">
                            <label class="form-label">Address</label>

                            <textarea name="address"
                                      class="form-control"
                                      rows="3"
                                      required></textarea>
                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>
                        </div>

                        <!-- CONFIRM PASSWORD -->
                        <div class="mb-4">
                            <label class="form-label">
                                Confirm Password
                            </label>

                            <input type="password"
                                   name="password_confirmation"
                                   class="form-control"
                                   required>
                        </div>

                        <!-- BUTTON -->
                        <button type="submit"
                                class="btn btn-custom w-100 py-2">

                            Register
                        </button>

                    </form>

                    <div class="text-center mt-4">
                        Already have an account?
                        <a href="{{ route('login') }}"
                           class="text-decoration-none fw-bold">

                            Login
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