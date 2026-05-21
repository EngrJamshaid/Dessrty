@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <h3>Add Flavour</h3>

    <form action="{{ route('flavours.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Flavour Name</label>
            <input type="text" name="flavour_name" class="form-control" required>
        </div>

        <button class="btn btn-success">Save</button>

    </form>

</div>

@endsection