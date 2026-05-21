<?php

namespace App\Http\Controllers;


use App\Models\AccessoryCategory;

use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    //
    public function showAss()
    {
        $categories = AccessoryCategory::all();

        return view('accessory_categories', compact('categories'));
    }

    public function showcat(string $id)
    {
        $category = AccessoryCategory::with('accessories')->findOrFail($id);

        return view('show_accessories', compact('category'));
    }
}
