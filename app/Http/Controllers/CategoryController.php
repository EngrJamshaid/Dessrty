<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Filling;
use App\Models\Flavour;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function showAllCategory()
    {
        $categories = Category::all();

        return view('welcome', ['categories' => $categories]);
    }



    public function showCakes(string $id)
    {
$category = Category::with('cakes')->findOrFail($id);

$flavours = Flavour::all();
$fillings = Filling::all();

return view('cake', compact('category', 'flavours', 'fillings'));
    }
}
