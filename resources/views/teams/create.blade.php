@extends('layouts.app')
@section('title', 'Create Team')
@section('content')
    <h1>Create Team</h1>
    <form action="{{ route('teams.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" class="form-control w-full border" required>
        </div>
        <div>
            <label>Captain</label>
            <select name="captain_id" class="form-control w-full border">
                <option value="">No Captain</option>
                @foreach($captains as $captain)
                    <option value="{{ $captain->id }}">{{ $captain->name }}</option>
                @endforeach
            </select>
        </div>
             <div class="form-group mb-3">
                 <label for="description">Description</label>
                 <textarea name="description" id="description" class="form-control" required>{{ old('description', $team->description ?? '') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
