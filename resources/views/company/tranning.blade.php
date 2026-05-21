<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Baking Classes | Cakes.com.pk</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #111;
            color: white;
        }

        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        /* HERO */
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
            url('{{ asset("images/hero.jpg") }}') center/cover no-repeat;
            height: 320px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content span {
            color: #ffb347;
        }

        hr {
            border-color: rgba(255,255,255,0.2);
        }

        p {
            color: #ffffff;
        }

        h2, h3 {
            color: #ffffff;
        }
    </style>
</head>

<body>

@include('header')

<!-- HERO -->
<section class="hero-section">
    <div class="hero-content">
        <span class="d-block mb-2">Who We Are</span>

        <h1 class="font-serif fw-bold display-6 display-md-4">
            We are cake experts
        </h1>
    </div>
</section>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="text-center mb-4">
        <h2 class="fw-bold text-warning">
            Get admission in cake baking classes online
        </h2>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">

            <p>
                <strong>Cakes.com.pk</strong>
                is an online cake shop offering premium cakes and professional cake baking classes.
                Learn from expert chefs and start your journey in cake designing.
            </p>

            <p>
                We provide affordable courses with no hidden charges. Our goal is to make you a professional cake designer.
            </p>

            <hr class="my-5">

            <h3 class="fw-bold">
                Get admission in the best Cake school
            </h3>

            <p>
                Join Cakes.com.pk and learn professional baking from home with expert instructors.
            </p>

        </div>
    </div>

</div>

@include('footer')

</body>
</html>