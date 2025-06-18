@extends('layouts.app')
@section('title', 'Team Details')
@section('content')
    <div class="container">
        <h1>Team: {{ $team->name }}</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Captain:</strong> {{ $team->captain ? $team->captain->name : 'No Captain' }}</p>
                <!-- Add more team details as needed -->
                <a href="{{ route('teams.edit', $team) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('teams.index') }}" class="btn btn-secondary">Back to Teams</a>
            </div>
        </div>
    </div>
@endsection
