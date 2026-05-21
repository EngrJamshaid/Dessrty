@extends('Admin.layout')
@section('content')
    <h1>Accessories List</h1>

<a href="{{ route('accessories.create') }}">Add New</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>

    @foreach($accessories as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->price }}</td>
        <td>
            @if($item->image)
                <img src="{{ asset('uploads/accessories/'.$item->image) }}" width="60">
            @endif
        </td>
        <td>
            <a href="{{ route('accessories.edit', $item->id) }}">Edit</a>

            <form action="{{ route('accessories.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection