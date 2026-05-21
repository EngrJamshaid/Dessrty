@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <h3>Add Filling</h3>

    <form action="{{ route('fillings.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Filling Name</label>
            <input type="text" name="filling_name" class="form-control" required>
        </div>

        <button class="btn btn-success">Save</button>

    </form>

</div>

@endsection