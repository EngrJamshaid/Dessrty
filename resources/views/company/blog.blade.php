<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Cakes.com.pk</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <style>
        body {
            background: #f8f9fa;
        }

        .blog-hero {
            background: url('https://images.unsplash.com/photo-1542826438-bd32f43d626f') center/cover no-repeat;
            height: 280px;
            position: relative;
            color: white;
        }

        .blog-hero::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.55);
        }

        .blog-hero h1 {
            position: relative;
            z-index: 2;
        }

        .blog-card img {
            height: 200px;
            object-fit: cover;
        }

        .blog-card {
            transition: 0.3s;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
    </style>
</head>

<body>
@include('header')
<!-- HERO -->
<div class="blog-hero d-flex align-items-center justify-content-center text-center">
    <h1 class="fw-bold">Our Cake Blog 🍰</h1>
</div>

<!-- BLOG SECTION -->
<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Latest Articles</h2>
        <p class="text-muted">Tips, recipes & cake decorating ideas</p>
    </div>

    <div class="row g-4">

        <!-- BLOG 1 -->
        <div class="col-md-4">
            <div class="card blog-card border-0 shadow-sm">
                <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">How to Bake Perfect Chocolate Cake</h5>
                    <p class="card-text text-muted">Learn step-by-step how to make soft and rich chocolate cake at home.</p>
                    <a href="#" class="btn btn-sm btn-warning">Read More</a>
                </div>
            </div>
        </div>

        <!-- BLOG 2 -->
        <div class="col-md-4">
            <div class="card blog-card border-0 shadow-sm">
                <img src="https://images.unsplash.com/photo-1519869325930-281384150729" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Top 5 Birthday Cake Ideas</h5>
                    <p class="card-text text-muted">Creative and trending birthday cake designs for every celebration.</p>
                    <a href="#" class="btn btn-sm btn-warning">Read More</a>
                </div>
            </div>
        </div>

        <!-- BLOG 3 -->
        <div class="col-md-4">
            <div class="card blog-card border-0 shadow-sm">
                <img src="https://images.unsplash.com/photo-1559628233-100c798642d4" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Cake Decoration Tips for Beginners</h5>
                    <p class="card-text text-muted">Simple tricks to make your cakes look professional and beautiful.</p>
                    <a href="#" class="btn btn-sm btn-warning">Read More</a>
                </div>
            </div>
        </div>

    </div>
</div>

@include('footer')

</body>
</html>