<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accessory;
use App\Models\AccessoryCategory;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessories = Accessory::all();
        return view('admin.accessories.index', compact('accessories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           $categories = AccessoryCategory::all();

    return view('admin.accessories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'category_id' => 'required',
         'quantity' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/accessories'), $imageName);
        }

        Accessory::create([
        'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $imageName
        ]);

        return redirect()->route('accessories.index')->with('success', 'Accessory added successfully');
    }

    public function edit(Accessory $accessory)
    {
        return view('admin.accessories.edit', compact('accessory'));
    }

    public function update(Request $request, Accessory $accessory)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/accessories'), $imageName);
            $data['image'] = $imageName;
        }

        $accessory->update($data);

        return redirect()->route('accessories.index')->with('success', 'Updated successfully');
    }

    public function destroy(Accessory $accessory)
    {
        $accessory->delete();
        return redirect()->route('accessories.index')->with('success', 'Deleted successfully');
    }
}
