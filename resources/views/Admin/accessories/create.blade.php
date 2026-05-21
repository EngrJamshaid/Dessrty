@extends('Admin.layout')
@section('content')
<h1>Add Accessory</h1>

<form action="{{ route('accessories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf


<select name="category_id">
        <option value="">Select Category</option>

        @foreach($categories as $category)

            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>

        @endforeach

    </select>


    <input type="text" name="name" placeholder="Name"><br><br>

    <input type="text" name="price" placeholder="Price"><br><br>
    <input type="number" name="quantity" placeholder="Quantity"><br><br>



    <input type="file" name="image"><br><br>

    <button type="submit">Save</button>
</form>
@endsection