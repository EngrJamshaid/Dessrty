<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers | Cakes.com.pk</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f8f9fa;
        }

        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url("{{ asset('images/hero.jpg') }}");
            background-size: cover;
            background-position: center;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
    </style>

  <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
</head>

<body>

    <!-- HEADER -->
    @include('header')

    <!-- HERO -->
    <section class="hero pt-5">
        <div>
            <small class="text-warning fw-semibold">Who We Are</small>
            <h1 class="fw-bold font-serif">We are cake experts</h1>
        </div>
    </section>

    <!-- CONTENT -->
    <div class="container py-5">

        <div class="text-center mb-5">
            <h2 class="text-warning fw-bold">Cakes.com.pk Careers</h2>
        </div>

        <!-- SECTION 1 -->
        <div class="card border-0 shadow-sm mb-4 p-4">
            <h3 class="fw-bold mb-3">
                Bakery Jobs Available
            </h3>

            <p class="text-muted">
                We provide opportunities for people who want to work from home or join our bakery network.
                If you are skilled in baking, this is a great chance to earn and grow with us.
            </p>
        </div>

        <!-- SECTION 2 -->
        <div class="card border-0 shadow-sm p-4">
            <h3 class="fw-bold mb-3">
                Cake Chef Job Opportunity
            </h3>

            <p class="text-muted">
                Cakes.com.pk is a growing bakery network. We offer flexible job opportunities where you can work from home
                and earn by baking cakes. Contact us for more details.
            </p>
        </div>

    </div>

    <!-- FOOTER -->
    @include('footer')

</body>

</html>