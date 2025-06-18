@extends('layouts.app')
@section('title', 'Add Item')
@section('content')
<div class="container">
    <h1>Add Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
