<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
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
    </style>
</head>

<body>

    @include('header')

    <div class="container py-5">

        <h3 class="mb-4">
            Search Results for: <b>{{ $query }}</b>
        </h3>

        <!-- CAKES -->
        <h5 class="mb-3">Cakes</h5>

        <div class="row g-4">

            @forelse($cakes as $cake)

            <div class="col-md-4">

                <div class="card cake-card h-100">

                    <img src="{{ asset('uploads/cakes/'.$cake->image) }}" class="cake-img">

                    <div class="card-body">

                        <div class="cake-title">
                            {{ $cake->cake_name }}
                        </div>

                        <div class="price mb-3">
                            Rs {{ $cake->cake_price }}
                        </div>

                        <!-- ADD TO CART FORM -->
                        <form action="{{ route('addcart') }}" method="POST">

                            @csrf

                            <input type="hidden" name="type" value="cake">
                            <input type="hidden" name="product_id" value="{{ $cake->id }}">

                            <input type="number"
                                name="quantity"
                                value="1"
                                min="1"
                                class="form-control mb-2">

                            <input type="text"
                                name="pound"
                                class="form-control mb-2"
                                placeholder="Enter Pound">

                            <button class="btn btn-danger btn-sm w-100">
                                Add To Cart
                            </button>

                        </form>

                    </div>

                </div>

            </div>

            @empty
            <p>No cakes found</p>
            @endforelse

        </div>

        <hr class="my-5">

        <!-- ACCESSORIES -->
        <h5 class="mb-3">Accessories</h5>

        <div class="row g-4">

            @forelse($accessories as $item)

            <div class="col-md-4">

                <div class="card cake-card h-100">

                    <img src="{{ asset('uploads/accessories/'.$item->image) }}" class="cake-img">

                    <div class="card-body">

                        <div class="cake-title">
                            {{ $item->name }}
                        </div>

                        <div class="price mb-3">
                            Rs {{ $item->price }}
                        </div>

                        <!-- ADD TO CART FORM -->
                        <form action="{{ route('addcart') }}" method="POST">

                            @csrf

                            <input type="hidden" name="type" value="accessory">
                            <input type="hidden" name="product_id" value="{{ $item->id }}">

                            <input type="number"
                                name="quantity"
                                value="1"
                                min="1"
                                class="form-control mb-2">

                            <button class="btn btn-pink btn-sm w-100"
                                style="background:#ff4f81;color:#fff;">
                                Add To Cart
                            </button>

                        </form>

                    </div>

                </div>

            </div>

            @empty
            <p>No accessories found</p>
            @endforelse

        </div>

    </div>

</body>

</html>