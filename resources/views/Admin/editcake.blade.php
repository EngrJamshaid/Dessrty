@extends('Admin.layout')

@section('content')

<div class="container mt-4">

    <h3>Edit Cake</h3>

    <form action="{{ route('cakes.update', $cake->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="cake_name" value="{{ $cake->cake_name }}" class="form-control mb-2">

        <input type="number" name="cake_price" value="{{ $cake->cake_price }}" class="form-control mb-2">

        <input type="number" name="pound" value="{{ $cake->pound }}" class="form-control mb-2">

        <select name="category_id" class="form-control mb-2">
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}"
                    {{ $cake->category_id == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>

        <input type="file" name="image" class="form-control mb-2">

        <img src="{{ asset('uploads/cakes/'.$cake->image) }}" width="80">

        <button class="btn btn-success mt-2">Update</button>

    </form>

</div>

@endsection