@extends('layouts.app')
@section('title', 'Add Game')
@section('content')
<div class="container">
    <h1>Add Game</h1>
    <form action="{{ route('games.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Team</label>
            <select name="team_id" class="form-control" required>
                <option value="">-- Select Team --</option>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Patron</label>
            <select name="patron_id" class="form-control">
                <option value="">-- Optional: Select Patron --</option>
                @foreach($patrons as $patron)
                    <option value="{{ $patron->id }}">{{ $patron->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Venue</label>
            <input type="text" name="venue" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
