@extends('layouts.app')
@section('title', 'Edit Member')
@section('content')
    <h1>Edit Member</h1>
    <form action="{{ route('members.update', $member) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ $member->name }}" class="form-control w-full border" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ $member->email }}" class="form-control w-full border" required>
        </div>
        <div>
            <label>Team</label>
            <select name="team_id" class="form-control w-full border">
                <option value="">No Team</option>
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ $member->team_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Role</label>
            <select name="role" class="form-control w-full border" required>
                <option value="member" {{ $member->role == 'member' ? 'selected' : '' }}>Member</option>
                <option value="coach" {{ $member->role == 'coach' ? 'selected' : '' }}>Coach</option>
                <option value="manager" {{ $member->role == 'manager' ? 'selected' : '' }}>Manager</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <form action="{{ route('members.destroy', $member) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member?');" style="margin-top: 1rem;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Member</button>
    </form>
@endsection

