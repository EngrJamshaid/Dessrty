@extends('Admin.layout')
@section('content')
    
<h2>Categories</h2>

<a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">
    Add Category
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>

    @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
    <img src="{{ asset('uploads/categories/'.$category->image) }}" 
         width="60" 
         height="60" 
         style="object-fit: cover; border-radius: 5px;">
</td>
            <td>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>


@endsection