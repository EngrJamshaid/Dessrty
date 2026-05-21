<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }

        .accessory-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
        }

        .accessory-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .accessory-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .btn-pink {
            background: #ff4f81;
            color: white;
        }

        .btn-pink:hover {
            background: #e63e6d;
        }
    </style>

</head>

<body>
    @include('header')
    <div class="container  py-5">

        <!-- HEADING -->
        <div class="text-center pt-5 mb-5">

            <h2 class="fw-bold">
                {{ $category->name }}
            </h2>

            <p class="text-muted">
                Accessories Collection
            </p>

        </div>

        <div class="row g-4">

            @foreach($category->accessories as $accessory)

            <div class="col-md-4">

                <div class="card accessory-card h-100">

                    <!-- IMAGE -->
                    <img src="{{ asset('uploads/accessories/'.$accessory->image) }}"
                        class="accessory-img">

                    <!-- BODY -->
                    <div class="card-body text-center">

                        <h5 class="fw-bold">
                            {{ $accessory->name }}
                        </h5>

                        <p class="text-muted mb-1">
                            Rs {{ $accessory->price }}/-
                        </p>

                        <p class="small text-secondary">
                            For {{ $accessory->quantity }} Items
                        </p>

                        <form action="{{ route('addcart') }}" method="POST">

                            @csrf

                            <input type="hidden" name="type" value="accessory">

                            <input type="hidden" name="product_id" value="{{ $accessory->id }}">

                            <div class="mb-3">

                                <label class="small fw-bold mb-1">
                                    Quantity
                                </label>

                                <input type="number"
                                    name="quantity"
                                    class="form-control"
                                    value="1"
                                    min="1"
                                    required>

                            </div>

                            <button class="btn btn-pink btn-sm w-100">

                                Add To Cart

                            </button>

                        </form>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>
    @include('footer')
</body>

</html>