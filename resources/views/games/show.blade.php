@extends('layouts.app')
@section('title', 'Game Details')
@section('content')
<div class="container">
    <h1>Game: {{ $game->name }}</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Date:</strong> {{ $game->date }}</p>
            <a href="{{ route('games.edit', $game) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('games.index') }}" class="btn btn-secondary">Back to Games</a>
        </div>
    </div>
</div>
@endsection
