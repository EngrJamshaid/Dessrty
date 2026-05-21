@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <h3 class="mb-3">Add New Cake</h3>

    <form action="{{ route('cakes.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <!-- Cake Name -->
        <div class="mb-3">
            <label>Cake Name</label>
            <input type="text" name="cake_name" class="form-control" required>
        </div>

        <!-- Price -->
        <div class="mb-3">
            <label>Cake Price</label>
            <input type="number" name="cake_price" class="form-control" required>
        </div>

        <!-- Pound -->
        <div class="mb-3">
            <label>Pound</label>
            <input type="number" name="pound" class="form-control" required>
        </div>

        <!-- Category -->
        <div class="mb-3">
            <label>Category</label>
<select name="category_id" class="form-control" required>
    <option value="" disabled selected>Select Category</option>

    @foreach($categories as $category)
        <option value="{{ $category->id }}">
            {{ $category->name }}
        </option>
    @endforeach

</select>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label>Cake Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-success">
            Save Cake
        </button>

    </form>

</div>

@endsection