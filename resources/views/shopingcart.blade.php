<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Shopping Cart</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="{{asset('css/header.css')}}">
 <link rel="stylesheet" href="{{asset('css/footer.css')}}">
<style>

body {
    background: #f6f6f6;
}
.top{
    margin-top: 3rem;
}
.cart-img {
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 10px;
}

.card-box {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
}

.summary-box {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
}

.remove {
    color: red;
    text-decoration: none;
    font-size: 18px;
}

.qty-input {
    width: 70px;
    text-align: center;
}

</style>

</head>

<body>
@include('header')
<div class=" container py-5">

    <h3 class="mb-4 top fw-bold">Shopping Cart</h3>

    <div class="row g-4">

        <!-- LEFT SIDE -->
        <div class="col-lg-8">

            <div class="card-box">

                <div class="table-responsive">

                    <table class="table align-middle">

                        <thead>

                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Pound</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>

                        </thead>

                        <tbody>

                        @foreach($carts as $cart)

                        <tr>

                            <!-- NAME -->
                            <td>
                                {{ $cart->product_name }}
                            </td>

                            <!-- TYPE -->
                            <td>
                                {{ ucfirst($cart->type) }}
                            </td>

                            <!-- PRICE -->
                            <td>
                                Rs {{ number_format($cart->price) }}
                            </td>

                            <!-- QUANTITY UPDATE -->
                            <td>

                                <form action="{{ route('cart.update', $cart->id) }}" method="POST">

                                    @csrf

                                    <div class="d-flex align-items-center gap-1">

                                        <button type="button"
                                                class="btn btn-sm btn-dark"
                                                onclick="decreaseQty(this)">
                                            -
                                        </button>

                                        <input type="number"
                                               name="quantity"
                                               value="{{ $cart->quantity }}"
                                               min="1"
                                               class="form-control qty-input">

                                        <button type="button"
                                                class="btn btn-sm btn-dark"
                                                onclick="increaseQty(this)">
                                            +
                                        </button>

                                        <button type="submit"
                                                class="btn btn-sm btn-success ms-2">
                                            ✔
                                        </button>

                                    </div>

                                </form>

                            </td>

                            <!-- POUND -->
                            <td>
                                @if($cart->pound)
                                    {{ $cart->pound }}
                                @else
                                    --
                                @endif
                            </td>

                            <!-- TOTAL -->
                            <td>
                                Rs {{ number_format($cart->total) }}
                            </td>

                            <!-- REMOVE -->
                            <td>
                                <a href="{{ route('cart.remove', $cart->id) }}"
                                   class="remove"
                                   onclick="return confirm('Remove item?')">
                                    ❌
                                </a>
                            </td>

                        </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-4">

            <div class="summary-box">

                <h5 class="mb-3">Cart Totals</h5>

                <div class="d-flex justify-content-between mb-2">
                    <span>Items</span>
                    <span>{{ $items }}</span>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <span>Subtotal</span>
                    <span>Rs {{ number_format($subtotal) }}</span>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <span>Shipping Fee</span>
                    <span>Rs {{ number_format($shipping) }}</span>
                </div>

                <hr>

                <div class="d-flex justify-content-between fw-bold mb-3">
                    <span>Total Bill</span>
                    <span>Rs {{ number_format($grandTotal) }}</span>
                </div>

               <a href="{{ route('profile') }}" class="btn btn-success w-100 mb-2">
    Proceed to Checkout
</a>

                <a href="{{route('contniushop')}}" class="btn btn-warning w-100">
                    Continue Shopping
                </a>

            </div>

        </div>

    </div>

</div>

@include('footer')

<script>
function increaseQty(btn){
    let input = btn.parentElement.querySelector('input');
    input.value = parseInt(input.value) + 1;
}

function decreaseQty(btn){
    let input = btn.parentElement.querySelector('input');
    if(input.value > 1){
        input.value = parseInt(input.value) - 1;
    }
}
</script>

</body>
</html>