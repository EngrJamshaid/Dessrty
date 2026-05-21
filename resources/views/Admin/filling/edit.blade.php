@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <h3>Update Filling</h3>

    <form action="{{ route('fillings.update', $filling->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Filling Name</label>
            <input type="text" 
                   name="filling_name" 
                   class="form-control"
                   value="{{ $filling->filling_name }}"
                   required>
        </div>

        <button class="btn btn-success">Update</button>

        <a href="{{ route('fillings.index') }}" class="btn btn-secondary">Back</a>

    </form>

</div>

@endsection