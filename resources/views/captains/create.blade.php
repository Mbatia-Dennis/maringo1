@extends('layouts.app')
@section('title', 'Add Captain')
@section('content')
<div class="container">
    <h1>Add Captain</h1>
    <form action="{{ route('captains.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Team</label>
            <select name="team_id" class="form-control">
                <option value="">No Team</option>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
