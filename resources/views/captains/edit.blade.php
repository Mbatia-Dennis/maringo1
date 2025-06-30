@extends('layouts.app')
@section('title', 'Edit Captain')
@section('content')
<div class="container">
    <h1>Edit Captain</h1>
    <form action="{{ route('captains.update', $captain) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $captain->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Team</label>
            <select name="team_id" class="form-control">
                <option value="">No Team</option>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ $captain->team_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
        <form action="{{ route(captains.destroy', $captain) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this captain?');" style="margin-top: 1rem;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Captain</button>
    </form>
</div>
@endsection
