@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>Accessory Categories</h3>

        <a href="{{ route('accessory-categories.create') }}" class="btn btn-primary">
            + Add Category
        </a>
    </div>

    <table class="table table-bordered text-center">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach($categories as $category)

            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
    @if($category->image)
        <img src="{{ asset('uploads/accessories/' . $category->image) }}"
             width="60"
             height="60"
             style="object-fit: cover; border-radius: 5px;">
    @else
        <span>No Image</span>
    @endif
</td>

                <td>

                    <a href="{{ route('accessory-categories.edit', $category->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('accessory-categories.destroy', $category->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete?')">
                            Delete
                        </button>

                    </form>

                </td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection