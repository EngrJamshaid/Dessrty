<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Cake;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{


    public function addToCart(Request $request)
    {

        if ($request->type == 'cake') {

            $cake = Cake::find($request->product_id);

            $total = $cake->cake_price * $request->quantity;

            Cart::create([

                'type' => 'cake',

                'product_id' => $cake->id,

                'product_name' => $cake->cake_name,

                'price' => $cake->cake_price,

                'quantity' => $request->quantity,

                'pound' => $request->pound,

                'total' => $total,
            ]);
        } else {

            $accessory = Accessory::find($request->product_id);

            $total = $accessory->price * $request->quantity;

            Cart::create([

                'type' => 'accessory',

                'product_id' => $accessory->id,

                'product_name' => $accessory->name,

                'price' => $accessory->price,

                'quantity' => $request->quantity,

                'total' => $total,
            ]);
        }

        return back()->with('success', 'Added To Cart Successfully');
    }



    public function cart()
    {

        $carts = Cart::all();

        $subtotal = Cart::sum('total');

        $shipping = 1000;

        $grandTotal = $subtotal + $shipping;

        $items = Cart::count();

        return view('shopingcart', compact(

            'carts',
            'subtotal',
            'shipping',
            'grandTotal',
            'items'
        ));
    }



    public function removeCart($id)
{
    $cart = Cart::find($id);

    if($cart) {
        $cart->delete();
    }

    return back()->with('success', 'Item removed from cart');
}


public function updateCart(Request $request, string $id)
{
    $cart = Cart::find($id);

    if($cart) {

        $cart->quantity = $request->quantity;

        $cart->total = $cart->price * $request->quantity;

        $cart->save();
    }

    return back();
}
}
