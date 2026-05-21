<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Category</h2>

    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class="mb-3">
            <label>Category Name</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control">
        </div>

        <!-- Old Image -->
        <div class="mb-3">
            <img src="{{ asset('uploads/categories/'.$category->image) }}" width="80">
        </div>

        <!-- New Image -->
        <div class="mb-3">
            <label>Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>

    </form>

</div>

</body>
</html>