<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessory Categories</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="{{asset('css/header.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>

        body{
            background: #f8f9fa;
        }

        .category-card{
            border: none;
            border-radius: 14px;
            overflow: hidden;
            transition: 0.3s;
            background: #fff;
        }

        .category-card:hover{
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .category-img{
            width: 100%;
            height: 220px;
            object-fit: cover;
        }
        .btn-pink{
    background:#ff4f81;
    color:white;
}
.btn-pink:hover{
    background:#e63e6d;
}

    </style>

</head>
<body>
@include('header')
<div class="container  py-5">

    <!-- HEADING -->
    <div class="text-center pt-5 mb-5">
        <h2 class="fw-bold">Accessories Categories</h2>
        <p class="text-muted">
            Choose your favourite accessories
        </p>
    </div>

    <div class="row g-4">

        @foreach($categories as $category)

        <div class="col-md-4">

            <div class="card category-card h-100">

                <!-- IMAGE -->
                <img src="{{ asset('uploads/accessories/'.$category->image) }}"
                     class="category-img"
                     alt="Category Image">

                <!-- BODY -->
                <div class="card-body text-center">

                    <h5 class="fw-bold">
                        {{ $category->name }}
                    </h5>

                    <p class="text-muted small">
                        Category ID: {{ $category->id }}
                    </p>

                   <a href="{{ url('/accessories/'.$category->id) }}"
   class="btn btn-pink btn-sm">

    View Accessories

</a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>
@include('footer')
</body>
</html>