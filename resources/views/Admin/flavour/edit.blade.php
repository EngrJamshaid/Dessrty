@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <h3 class="mb-3">Update Flavour</h3>

    <form action="{{ route('flavours.update', $flavour->id) }}" method="POST">

        @csrf
        @method('PUT')

        <!-- Flavour Name -->
        <div class="mb-3">
            <label>Flavour Name</label>
            <input type="text" 
                   name="flavour_name" 
                   class="form-control" 
                   value="{{ $flavour->flavour_name }}"
                   required>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-success">
            Update Flavour
        </button>

        <a href="{{ route('flavours.index') }}" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

@endsection