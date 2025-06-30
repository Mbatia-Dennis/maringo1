@extends('layouts.app')
@section('title', 'Edit Team')
@section('content')
    <h1>Edit Team</h1>
    <form action="{{ route('teams.update', $team) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ $team->name }}" class="form-control w-full border" required>
        </div>
        <div>
            <label>Captain</label>
            <select name="captain_id" class="form-control w-full border">
                <option value="">No Captain</option>
                @foreach($captains as $captain)
                    <option value="{{ $captain->id }}" {{ $team->captain_id == $captain->id ? 'selected' : '' }}>{{ $captain->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description', $team->description ?? '') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
        <form action="{{ route('teams.destroy', $team) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this team?');" style="margin-top: 1rem;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Team</button>
    </form>
@endsection
