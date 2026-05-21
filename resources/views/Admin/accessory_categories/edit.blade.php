@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <h3>Edit Category</h3>

    <form action="{{ route('accessory-categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text"
                   name="name"
                   value="{{ $category->name }}"
                   class="form-control"
                   required>
        </div>
         <!-- Current Image -->
        <div class="mb-3">
            <label>Current Image</label><br>

            @if($category->image)
                <img src="{{ asset('uploads/' . $category->image) }}"
                     width="80"
                     height="80"
                     style="object-fit: cover; border-radius: 5px;">
            @else
                <span>No Image</span>
            @endif
        </div>

        <!-- New Image Upload -->
        <div class="mb-3">
            <label>Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-success">Update</button>

    </form>

</div>

@endsection