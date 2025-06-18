@extends('layouts.app')
@section('title', 'Items')
@section('content')
<div class="container">
    <h1>Items</h1>
    <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">Add Item</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('items.show', $item) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('items.edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this item?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
