<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $categories = Category::all();

        return view('admin.showcategory', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    // validation
    $request->validate([
        'name' => 'required',
        'image' => 'required|image'
    ]);

    // image upload
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('uploads/categories'), $imageName);

    // insert data
    Category::create([
        'name' => $request->name,
        'image' => $imageName
    ]);

    return redirect()->route('categories.index')
                     ->with('success', 'Category added successfully');
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
        //
            $category = Category::findOrFail($id);

    return view('admin.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $category = Category::findOrFail($id);

    $request->validate([
        'name' => 'required',
    ]);

    $data = [
        'name' => $request->name,
    ];

    // agar image new upload ho
    if ($request->hasFile('image')) {

        // old image delete (optional)
        if ($category->image && file_exists(public_path('uploads/categories/'.$category->image))) {
            unlink(public_path('uploads/categories/'.$category->image));
        }

        // new image upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/categories'), $imageName);

        $data['image'] = $imageName;
    }

    $category->update($data);

    return redirect()->route('categories.index')
                     ->with('success', 'Category updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy(string $id)
{
    $category = Category::findOrFail($id);

    // delete image from folder (if exists)
    if ($category->image && file_exists(public_path('uploads/categories/' . $category->image))) {
        unlink(public_path('uploads/categories/' . $category->image));
    }

    // delete record from database
    $category->delete();

    return redirect()->route('categories.index')
                     ->with('success', 'Category deleted successfully');
}
}
