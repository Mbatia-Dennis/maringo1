@extends('layouts.app')
@section('title', 'Teams')
@section('content')
    <h1>Teams</h1>
    <a href="{{ route('teams.create') }}" class="btn btn-primary mb-3">Add Team</a>
    <table class="table w-full border">
        <thead>
            <tr><th>Name</th><th>Captain</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->captain ? $team->captain->name : 'None' }}</td>
                    <td>
                        @if(auth()->user()->role === 'admin')
                            <a href="{{ route('teams.edit', $team) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('teams.destroy', $team) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

