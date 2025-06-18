@extends('layouts.app')
@section('title', 'Patrons')
@section('content')
<div class="container">
    <h1>Patrons</h1>
    <a href="{{ route('patrons.create') }}" class="btn btn-primary mb-3">Add Patron</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patrons as $patron)
            <tr>
                <td>{{ $patron->name }}</td>
                <td>{{ $patron->contact ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('patrons.show', $patron) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('patrons.edit', $patron) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('patrons.destroy', $patron) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this patron?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
