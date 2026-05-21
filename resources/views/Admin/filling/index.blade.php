@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>All Fillings</h3>

        <a href="{{ route('fillings.create') }}" class="btn btn-primary">
            + Add Filling
        </a>
    </div>

    <table class="table table-bordered text-center">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Filling Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach($fillings as $filling)

            <tr>
                <td>{{ $filling->id }}</td>
                <td>{{ $filling->filling_name }}</td>

                <td>

                    <a href="{{ route('fillings.edit', $filling->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('fillings.destroy', $filling->id) }}" method="POST" style="display:inline;">
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