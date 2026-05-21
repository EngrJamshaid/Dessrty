<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Add Category</h2>

    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Category Name -->
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label class="form-label">Category Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-primary">
            Save Category
        </button>

    </form>

</div>

</body>
</html>