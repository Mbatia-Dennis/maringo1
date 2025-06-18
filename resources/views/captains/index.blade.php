
@extends('layouts.app')
@section('title', 'Captains')
@section('content')
<div class="container">
    <h1>Captains</h1>
    <a href="{{ route('captains.create') }}" class="btn btn-primary mb-3">Add Captain</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Team</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($captains as $captain)
            <tr>
                <td>{{ $captain->name }}</td>
                <td>{{ $captain->team ? $captain->team->name : 'No Team' }}</td>
                <td>
                    <a href="{{ route('captains.show', $captain) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('captains.edit', $captain) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('captains.destroy', $captain) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this captain?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
