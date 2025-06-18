@extends('layouts.app')
@section('title', 'Edit Game')
@section('content')
<div class="container">
    <h1>Edit Game</h1>
    <form action="{{ route('games.update', $game) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $game->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" value="{{ $game->date }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
