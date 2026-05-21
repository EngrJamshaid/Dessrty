<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} Cakes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
    <style>
        body {
            background: #f8f9fa;
        }

        .cake-card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            transition: 0.3s;
            background: #fff;
        }

        .cake-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .cake-img {
            height: 220px;
            width: 100%;
            object-fit: cover;
        }

        .card-body {
            padding: 18px;
        }

        .cake-title {
            font-size: 18px;
            font-weight: 600;
        }

        .price {
            font-weight: 500;
            color: #555;
        }

        .section-label {
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 5px;
            color: #444;
        }

        select {
            font-size: 14px;
        }

        .btn-cart {
            border-radius: 8px;
            padding: 10px;
            font-weight: 500;
        }
    </style>
</head>
<body>
   
@include('header')
<div class="container py-4 ">

    <!-- HEADER -->
    <div style="margin-top: 4rem;" class="text-center mb-4">
        <h2 class="fw-bold">{{ $category->name }} Cakes</h2>
        <p class="text-muted">Fresh & Delicious Collection</p>
    </div>

    <div class="row g-4">

        @foreach($category->cakes as $cake)

        <div class="col-md-4">

            <div class="card cake-card h-100">

                <!-- IMAGE -->
                <img src="{{ asset('uploads/cakes/'.$cake->image) }}" class="cake-img">

                <div class="card-body">

                    <!-- TITLE -->
                    <div class="cake-title mb-1">
                        {{ $cake->cake_name }}
                    </div>

                    <!-- PRICE -->
                    <div class="price mb-3">
                        Rs {{ $cake->cake_price }} | {{ $cake->pound }} Pound
                    </div>

                    <!-- FLAVOUR -->
                    <div class="mb-2">
                        <div class="section-label">Flavour</div>
                        <select class="form-select form-select-sm">
                            <option selected disabled>Choose flavour</option>
                            @foreach($flavours as $flavour)
                                <option value="{{ $flavour->id }}">
                                    {{ $flavour->flavour_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- FILLING -->
                    <div class="mb-3">
                        <div class="section-label">Filling</div>
                        <select class="form-select form-select-sm">
                            <option selected disabled>Choose filling</option>
                            @foreach($fillings as $filling)
                                <option value="{{ $filling->id }}">
                                    {{ $filling->filling_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- BUTTON -->
<form action="{{ route('addcart') }}" method="POST">

    @csrf

    <input type="hidden" name="type" value="cake">

    <input type="hidden" name="product_id" value="{{ $cake->id }}">

    <!-- Pound -->
    <div class="mb-2">

        <label class="section-label">
            Pound
        </label>

        <input type="text"
               name="pound"
               class="form-control form-control-sm"
               placeholder="Enter Pound"
               required>

    </div>

    <!-- Quantity -->
    <div class="mb-3">

        <label class="section-label">
            Quantity
        </label>

        <input type="number"
               name="quantity"
               class="form-control form-control-sm"
               value="1"
               min="1"
               required>

    </div>

    <button class="btn btn-danger btn-sm w-100 btn-cart">

        Add To Cart

    </button>

</form>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

</body>
</html>