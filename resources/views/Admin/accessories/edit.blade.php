@extends('Admin.layout')
@section('content')
    <h1>Edit Accessory</h1>

<form action="{{ route('accessories.update', $accessory->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $accessory->name }}"><br><br>

    <input type="text" name="price" value="{{ $accessory->price }}"><br><br>

    

    <input type="file" name="image"><br><br>

    <button type="submit">Update</button>
</form>
@endsection