
@extends('layouts.app')
@section('title', 'Edit Item')
@section('content')
<div class="container">
    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $item->name }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
