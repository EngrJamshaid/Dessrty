<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dessert</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome 6 -->
 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- font  -->
  <!-- Google Font Link -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
  <link rel="stylesheet" href="{{asset('css/card.css')}}">

</head>

<body>

  @include('header');


  <!-- Demo Content -->
  <div class="demo-hero">
    <div>
      <h1> Best Cakes Collection in Dessert</h1>
      <p>Order delicious custom cakes online for birthdays, weddings, anniversaries, and every special occasion. Fresh flavors, beautiful designs, and fast delivery across Muzaffrabad — made with love for your sweetest moments.</p>
    </div>
    <!-- Button -->
    <a href="#" class="buy-cake-btn">Buy a Cake</a>
  </div>

  <!-- WhatsApp Floating -->
  <a href="https://wa.me/923428980967" class="tb-float-wa"
    target="_blank" rel="noopener" aria-label="WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>











  <!-- ==========================Category================== -->
  <div class="container mt-4 p-2">

    <div class="row g-4">

      @foreach($categories as $category)

      <div class="col-md-4">

        <div class="card shadow-sm border-0 h-100 category-card">

          <!-- Image Wrapper -->
          <div class="category-img-wrapper">

            @if($category->image)
            <img src="{{ asset('uploads/categories/' . $category->image) }}"
              class="category-img"
              alt="Category Image">
            @else
            <img src="https://via.placeholder.com/400x250"
              class="category-img"
              alt="No Image">
            @endif

          </div>

          <div class="card-body text-center d-flex flex-column">

            <h5 class="card-title mb-2">
              {{ $category->name }}
            </h5>

            <p class="text-muted small mb-3">
              Category ID: {{ $category->id }}
            </p>

            <a href="{{ url('/category/'.$category->id.'/cakes') }}"
              class="btn btn-danger btn-sm mt-auto">
              View Cakes
            </a>

          </div>

        </div>

      </div>

      @endforeach

    </div>

  </div>
  <!-- ============================================ -->

<section class="py-5 position-relative overflow-hidden">
    <!-- Background Image -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <img src="{{asset('images/ban.jpg')}}" alt="Online Cakes in Muzaffarabad"
            class="w-100 h-100 object-fit-cover">

        <!-- Dark Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
    </div>

    <div class="container position-relative">
        <div class="row justify-content-center align-items-center min-vh-100">

            <div class="col-lg-8">
                <div style="background-color: pink;" class=" shadow-lg overflow-hidden">
                    <div class="row g-0 align-items-center">

                        <!-- Children Image -->
                        <div class="col-md-4">
                            <img src="{{asset('images/little.jpg')}}"
                                alt="Children Birthday Cake"
                                class="img-fluid w-100 h-100 object-fit-cover">
                        </div>

                        <!-- Content -->
                        <div class="col-md-8">
                            <div class="p-4 p-lg-5">

                                <h1 class="fw-bold mb-3">
                                    Online Cakes in Muzaffarabad
                                </h1>

                                <p class="text-muted mb-4">
                                    Celebrate your special moments with delicious and freshly baked cakes in Muzaffarabad.
                                    We provide birthday cakes, wedding cakes, anniversary cakes, and custom cakes with
                                    fast delivery and premium quality.
                                </p>

                                <h3 class="fw-semibold mb-3">
                                    We are the ideal choice for your Baby Cake
                                </h3>

                                <p class="text-muted mb-4">
                                    From chocolate cakes to customized birthday cakes, we offer a wide range of designs
                                    for kids and family celebrations. Make your moments memorable with our freshly baked
                                    cakes and reliable online cake delivery service in Muzaffarabad.
                                </p>

                                <a href="{{route('register')}}"
                                    class="btn btn-outline-dark px-4 py-2 rounded-0">
                                    Register Now
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- accessotreis -->
 <section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-lg-8 text-center">
                
                <span class="text-uppercase fw-semibold text-danger">
                    Cake Accessories
                </span>

                <h2 class="fw-bold display-6 mt-2 mb-3">
                    Make Your Celebration More Special
                </h2>

                <p class="text-muted fs-5 mb-4">
                    Explore our beautiful collection of cake accessories including candles,
                    toppers, balloons, party decorations, and gift items for birthdays,
                    weddings, and special events in Muzaffarabad.
                </p>

                <a href="{{route('contniushop')}}"
                    class="btn btn-dark px-4 py-2 rounded-pill">
                    Shop Accessories
                </a>

            </div>

        </div>
    </div>
</section>
<!-- accessotreis -->











  <!-- services section -->
  <section class="py-5 bg-light">
    <div class="container text-center">

      <h2 class="mb-5 fw-bold display-5" style="font-family: 'Playfair Display', Georgia, serif;">Our Services</h2>

      <div class="row g-4 justify-content-center">

        <div class="col-md-4">
          <div class="card h-100 border-0 bg-transparent p-3">
            <div class="mb-3">
              <img src="{{asset('images/cakelogo.png')}}" alt="Cake For Every Occasion" class="img-fluid" style="width: 70px; height: 70px; object-fit: contain;">
            </div>
            <h3 class="h4 fw-normal text-secondary mb-3">Cake For Every Occasion</h3>
            <p class="text-muted lh-base px-2">
              Select the perfect cake in Lahore for your best moments. Buy cakes easily via Credit Card, JazzCash, EasyPaisa, Bank Account, Western Union, or Cash on Delivery.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100 border-0 bg-transparent p-3">
            <div class="mb-3">
              <img src="{{asset('images/cakelogo.png')}}" alt="Best Taste" class="img-fluid" style="width: 70px; height: 70px; object-fit: contain;">
            </div>
            <h3 class="h4 fw-normal text-secondary mb-3">Best Taste</h3>
            <p class="text-muted lh-base px-2">
              We assure our cakes are of the highest quality across Pakistan. We deliver freshly baked, premium cakes right to your doorstep in Lahore in just 5 to 6 hours.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card h-100 border-0 bg-transparent p-3">
            <div class="mb-3">
              <img src="{{asset('images/cakelogo.png')}}" alt="Home Delivery" class="img-fluid" style="width: 70px; height: 70px; object-fit: contain;">
            </div>
            <h3 class="h4 fw-normal text-secondary mb-3">Home Delivery</h3>
            <p class="text-muted lh-base px-2">
              We provide reliable birthday cake home delivery services across Pakistan, bringing you the best birthday cakes to make your celebrations sweeter.
            </p>
          </div>
        </div>

      </div>

      <div class="row mt-5">
        <div class="col-12">
          <p class="mb-1 text-secondary fw-semibold">Online Cakes</p>
          <p class="mb-3 text-primary fw-bold">Cakes.com.pk</p>
          <p class="text-muted small mb-1">
            Our cakes have been rated <strong class="text-dark">5 out of 5</strong> based on 8,686 reviews.
          </p>
          <p class="text-muted small">
            We have a collection of UPTO 500 Cakes &amp; Accessories. Cakes on sale, ranging from <strong class="text-dark">PKR 300 to PKR 50,000</strong>.
          </p>
        </div>
      </div>

    </div>
  </section>
  <!-- services section ends -->


  <!-- number -->
  <section class="bg-dark text-white py-5">
    <div class="container">
      <div class="row text-center gy-4">

        <div class="col-md-4">
          <div class="fs-4 text-white mb-1">32</div>
          <h3 class="h5 fw-normal text-secondary" style="letter-spacing: 0.5px;">Today Visitors</h3>
        </div>

        <div class="col-md-4">
          <div class="fs-4 text-white mb-1">2178</div>
          <h3 class="h5 fw-normal text-secondary" style="letter-spacing: 0.5px;">Monthly Visitors</h3>
        </div>

        <div class="col-md-4">
          <div class="fs-4 text-white mb-1">16276</div>
          <h3 class="h5 fw-normal text-secondary" style="letter-spacing: 0.5px;">Yearly Visitors</h3>
        </div>

      </div>
    </div>
  </section>

  <section class="py-4 text-center" style="background-color: #6d3d32;">
    <div class="container">
      <a href="tel:03428980967" class="text-white text-decoration-none display-6 fw-black m-0 tracking-wide" style="font-family: 'Arial Black', Impact, sans-serif;">
        Call Us 0342 8980967
      </a>
    </div>
  </section>
  <!-- number -->


  <!-- footer section is here -->
  @include('footer');
  <!-- Bootstrap 5 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

  <script src="{{asset('js/headerjs.js')}}"></script>

</body>

</html>