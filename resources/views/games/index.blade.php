@extends('layouts.app')
@section('title', 'Games')
@section('content')
<div class="container">
    <h1>Games</h1>
    <a href="{{ route('games.create') }}" class="btn btn-primary mb-3">Add Game</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Venue</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
            <tr>
                <td>{{ $game->name }}</td>
                <td>{{ $game->date }}</td>
                <td>
                    <a href="{{ route('games.show', $game) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('games.edit', $game) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('games.destroy', $game) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this game?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
