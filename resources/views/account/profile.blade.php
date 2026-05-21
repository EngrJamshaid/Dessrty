@php
use Illuminate\Support\Facades\Auth;
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <!-- Bootstrap CSS (FIXED) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f9fa;
        }

        .brand-heading {
            font-family: 'Fredoka', sans-serif;
            color: #5c3a21;
            font-weight: 700;
        }

        .sidebar-link {
            color: #fca311;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: 0.2s;
        }

        .sidebar-link:hover {
            color: #d48200;
        }

        .form-control:focus {
            border-color: #5c3a21;
            box-shadow: 0 0 0 0.25rem rgba(92, 58, 33, 0.15);
        }

        .btn-custom-brown {
            background-color: #693c2e;
            color: #fff;
            font-family: 'Fredoka', sans-serif;
            font-size: 1.1rem;
            border: none;
            padding: 10px;
        }

        .btn-custom-brown:hover {
            background-color: #522e23;
            color: #fff;
        }
    </style>
</head>

<body class="py-5">
@include('header')
    <div class="container">
        <div class="row g-5">

            <!-- SIDEBAR -->
            <aside class="col-md-4 col-lg-3">

                <div class="mb-5">
                    <h2 class="brand-heading h3 mb-4 text-center text-md-start">
                        value="{{ Auth::user()->name }}"
                    </h2>

                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li>
                            <a href="#" class="sidebar-link">
                                ➜ Account Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-link">
                                ➜ My Profile
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-link">
                                ➜ My Orders
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- CART -->
                <div class="mt-4">
                    <h3 class="brand-heading h4 mb-3 text-center text-md-start">
                        Your Cart
                    </h3>

                    <table class="table border">
                        <tr>
                            <td class="fw-semibold">Items</td>
                            <td class="text-end">{{ $cartCount }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Total</td>
                            <td class="text-end fw-bold">Rs {{ number_format($cartTotal+1000) }} /-</td>
                        </tr>
                    </table>
                </div>

            </aside>

            <!-- MAIN CONTENT -->
            <main class="col-md-8 col-lg-9">

                <div class="mb-4">
                    <h1 class="brand-heading h2 mb-1">My Profile</h1>
                    <p class="text-danger small fw-medium">
                        Please complete your personal information to confirm your order
                    </p>
                </div>

                <form class="row g-3">

                    <div class="col-sm-6">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" value="JAMSHAID">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" value="DASTI">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="jdasti540@gmail.com">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Phone</label>
                        <input type="tel" class="form-control" placeholder="Phone">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Billing Address</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>

                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-custom-brown w-100">
                            Save Changes
                        </button>
                    </div>

                </form>

            </main>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@include('footer')
</body>

</html>