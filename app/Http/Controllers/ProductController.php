<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Cake;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //



public function search(Request $request)
{
    $query = $request->q;

    $cakes = Cake::where('cake_name', 'LIKE', "%{$query}%")
                ->get();

    $accessories = Accessory::where('name', 'LIKE', "%{$query}%")
                ->get();

    return view('search', compact('cakes', 'accessories', 'query'));
}
}
