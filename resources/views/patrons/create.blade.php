@extends('layouts.app')
@section('title', 'Add Patron')
@section('content')
<div class="container">
    <h1>Add Patron</h1>
    <form action="{{ route('patrons.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Contact</label>
            <input type="text" name="contact" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
