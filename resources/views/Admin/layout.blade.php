<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        /* SIDEBAR */
        .sidebar {
            height: 100vh;
            background: #212529;
            color: white;
            padding: 20px;
            position: fixed;
            width: 240px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .sidebar a:hover {
            background: #343a40;
        }

        /* CONTENT */
        .content {
            margin-left: 240px;
            padding: 20px;
        }

        /* TOP BAR */
        .topbar {
            background: white;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>

</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h4 class="mb-4">🍰 Admin Panel</h4>

        <a href="/admin/dashboard"><i class="fa fa-home"></i> Dashboard</a>
        <a href="/admin/categories"><i class="fa fa-list"></i> Categories</a>
        <a href="/admin/cakes"><i class="fa fa-birthday-cake"></i> Cakes</a>
        <a href="/admin/flavours"><i class="fa fa-leaf"></i> Flavours</a>
        <a href="/admin/fillings"><i class="fa fa-box"></i> Fillings</a>
        <a href="/admin/accessory-categories"><i class="fa fa-tags"></i> Accessory Categories</a>
        <a href="/admin/accessories"><i class="fa fa-gem"></i> Accessories</a>
        <a href="/logout"><i class="fa fa-sign-out"></i> Logout</a>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="topbar shadow-sm">
            <h5 class="mb-0">@yield('title', 'Dashboard')</h5>
        </div>

        @yield('content')

    </div>

</body>

</html>