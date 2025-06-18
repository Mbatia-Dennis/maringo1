@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Members</h1>
    <a href="{{ route('members.create') }}" class="btn btn-primary mb-3">Add Member</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>
                    <a href="{{ route('members.show', $member) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('members.edit', $member) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('members.destroy', $member) }}" method="POST" style="display:inline;">
                        
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this member?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
