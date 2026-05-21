@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>All Cakes</h3>

        <a href="{{ route('cakes.create') }}" class="btn btn-primary">
            + Add Cake
        </a>
    </div>

    <table class="table table-bordered table-hover text-center">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Pound</th>
                <th>Category</th>

                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach($cakes as $cake)

            <tr>

                <td>{{ $cake->id }}</td>

                <!-- Image -->
                <td>
                    <img src="{{ asset('uploads/cakes/'.$cake->image) }}" width="60" height="60" style="object-fit: cover;">
                </td>

                <!-- Name -->
                <td>{{ $cake->cake_name }}</td>

                <!-- Price -->
                <td>{{ $cake->cake_price }}</td>

                <!-- Pound -->
                <td>{{ $cake->pound }}</td>

                <!-- Category -->
                <td>{{ $cake->category->name ?? 'N/A' }}</td>



                <!-- Action -->
                <td>

                    <!-- Show -->
                    <a href="{{ route('cakes.show', $cake->id) }}" class="btn btn-info btn-sm">
                        View
                    </a>

                    <!-- Edit -->
                    <a href="{{ route('cakes.edit', $cake->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <!-- Delete -->
                    <form action="{{ route('cakes.destroy', $cake->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Delete this cake?')">
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