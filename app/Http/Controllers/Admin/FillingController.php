<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Filling;
use Illuminate\Http\Request;

class FillingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $fillings = Filling::all();

    return view('admin.filling.index', compact('fillings'));
}

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('admin.filling.create');
}

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'filling_name' => 'required'
    ]);

    Filling::create([
        'filling_name' => $request->filling_name
    ]);

    return redirect()->route('fillings.index')
                     ->with('success','Filling Added');
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
    public function edit($id)
{
    $filling = Filling::findOrFail($id);

    return view('admin.filling.edit', compact('filling'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $filling = Filling::findOrFail($id);

    $filling->update([
        'filling_name' => $request->filling_name
    ]);

    return redirect()->route('fillings.index')
                     ->with('success','Filling Updated');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    $filling = Filling::findOrFail($id);

    $filling->delete();

    return redirect()->route('fillings.index')
                     ->with('success','Filling Deleted');
}
}
