<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* HERO */
        .about-hero {
            background: url('{{asset("images/hero.jpg")}}') center/cover no-repeat;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .about-hero::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .about-hero h1 {
            position: relative;
            z-index: 2;
            font-weight: bold;
        }

        /* IMAGE */
        .about-img {
            width: 100%;
            border-radius: 15px;
            object-fit: cover;
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 15px;
        }
    </style>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

      <link rel="stylesheet" href="{{asset('css/header.css')}}">
      <link rel="stylesheet" href="{{asset('css/footer.css')}}">

</head>

<body>
<!-- @include('header') -->
    <!-- HERO TOP IMAGE -->
    <div class="about-hero pt-5">
        <h1>We are Cake Experts</h1>
    </div>

    <div class="container py-5">

        <h5 class="text-center text-muted mb-4">
            About Us (Online Cakes in Muzaffarabad)
        </h5>

        <div class="row align-items-center">

            <!-- LEFT TEXT -->
            <div class="col-md-6">

                <h3 class="section-title">Who We Are</h3>

                <p>
                    Welcome to our online cake store based in Muzaffarabad.
                    We specialize in fresh, delicious, and premium quality cakes
                    for every occasion including birthdays, weddings, and celebrations.
                </p>

                <p>
                    Our mission is to deliver happiness at your doorstep in Muzaffarabad
                    with freshly baked cakes made from high-quality ingredients.
                </p>

                <p>
                    From chocolate to fruit cakes, we ensure every bite brings joy and
                    makes your special moments even more memorable.
                </p>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="col-md-6 text-center">

                <img src="{{ asset('images/cakelogo.png') }}"
                    class="about-img"
                    alt="Cake Image">

            </div>

        </div>

    </div>

    @include('footer')

</body>

</html>