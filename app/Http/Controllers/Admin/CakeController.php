<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cake;
use App\Models\Category;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $cakes = Cake::with('category')->get();

    return view('admin.showcake', compact('cakes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    $categories = Category::all();

    return view('Admin.addcake', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('uploads/cakes'), $imageName);

    Cake::create([
        'cake_name' => $request->cake_name,
        'cake_price' => $request->cake_price,
        'pound' => $request->pound,
        'category_id' => $request->category_id,
        'image' => $imageName
    ]);

    return redirect()->route('cakes.index')->with('success','Cake Added');
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
    $cake = Cake::findOrFail($id);
    $categories = Category::all();

    return view('admin.editcake', compact('cake','categories'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $cake = Cake::findOrFail($id);

    $data = [
        'cake_name' => $request->cake_name,
        'cake_price' => $request->cake_price,
        'pound' => $request->pound,
        'category_id' => $request->category_id,
    ];

    if ($request->hasFile('image')) {

       if ($cake->image && file_exists(public_path('uploads/cakes/' . $cake->image))) {
    unlink(public_path('uploads/cakes/' . $cake->image));
}

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/cakes'), $imageName);

        $data['image'] = $imageName;
    }

    $cake->update($data);

    return redirect()->route('cakes.index')->with('success','Cake Updated');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy($id)
{
    $cake = Cake::findOrFail($id);

    if ($cake->image) {
        unlink(public_path('uploads/cakes/'.$cake->image));
    }

    $cake->delete();

    return redirect()->route('cakes.index')->with('success','Cake Deleted');
}
}
