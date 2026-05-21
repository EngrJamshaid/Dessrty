<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flavour;
use Illuminate\Http\Request;

class FlavourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $flavours = Flavour::all();

    return view('admin.flavour.index', compact('flavours'));
}

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('admin.flavour.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'flavour_name' => 'required'
    ]);

    Flavour::create([
        'flavour_name' => $request->flavour_name
    ]);

    return redirect()->route('flavours.index')
                     ->with('success','Flavour Added');
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
    $flavour = Flavour::findOrFail($id);

    return view('admin.flavour.edit', compact('flavour'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $flavour = Flavour::findOrFail($id);

    $flavour->update([
        'flavour_name' => $request->flavour_name
    ]);

    return redirect()->route('flavours.index')
                     ->with('success','Flavour Updated');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy(string $id)
{
    $flavour = Flavour::findOrFail($id);

    $flavour->delete();

    return redirect()->route('flavours.index')
                     ->with('success','Flavour Deleted');
}
}
