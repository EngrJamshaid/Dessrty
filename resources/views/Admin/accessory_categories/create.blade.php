@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <h3>Add Accessory Category</h3>

    <form action="{{ route('accessory-categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
</div>

        <button class="btn btn-success">Save</button>

    </form>

</div>

@endsection