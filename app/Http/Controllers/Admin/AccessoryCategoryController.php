<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccessoryCategory;
use Illuminate\Http\Request;

class AccessoryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $categories = AccessoryCategory::all();

    return view('admin.accessory_categories.index', compact('categories'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('admin.accessory_categories.create');
}

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
   $request->validate([
        'name' => 'required',
        'image' => 'nullable|image'
    ]);

    $imageName = null;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/accessories/'), $imageName);
    }

    AccessoryCategory::create([
        'name' => $request->name,
        'image' => $imageName
    ]);

    return redirect()->route('accessory-categories.index')
                     ->with('success', 'Category Added');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $category = AccessoryCategory::findOrFail($id);

    return view('admin.accessory_categories.edit', compact('category'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request,string $id)
{
    $category = AccessoryCategory::findOrFail($id);

    $imageName = $category->image;

    if ($request->hasFile('image')) {

        // old image delete (optional)
        if ($category->image && file_exists(public_path('uploads/accessories/' . $category->image))) {
            unlink(public_path('uploads/accessories/' . $category->image));
        }

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/accessories/'), $imageName);
    }

    $category->update([
        'name' => $request->name,
        'image' => $imageName
    ]);

    return redirect()->route('accessory-categories.index')
                     ->with('success', 'Category Updated');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $category = AccessoryCategory::findOrFail($id);

    $category->delete();

    return redirect()->route('accessory-categories.index')
                     ->with('success', 'Category Deleted');
}
}
