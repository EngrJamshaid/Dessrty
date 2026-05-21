@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>All Flavours</h3>

        <a href="{{ route('flavours.create') }}" class="btn btn-primary">
            + Add Flavour
        </a>
    </div>

    <table class="table table-bordered text-center">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Flavour Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach($flavours as $flavour)

            <tr>
                <td>{{ $flavour->id }}</td>
                <td>{{ $flavour->flavour_name }}</td>

                <td>

                    <a href="{{ route('flavours.edit', $flavour->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('flavours.destroy', $flavour->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">
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