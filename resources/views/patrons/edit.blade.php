@extends('layouts.app')
@section('title', 'Edit Patron')
@section('content')
<div class="container">
    <h1>Edit Patron</h1>
    <form action="{{ route('patrons.update', $patron) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $patron->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Contact</label>
            <input type="text" name="contact" value="{{ $patron->contact }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
        <form action="{{ route('patrons.destroy', $patron) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this patron?');" style="margin-top: 1rem;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Patron</button>
    </form>
</div>
@endsection
