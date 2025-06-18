@extends('layouts.app')
@section('title', 'Create Member')
@section('content')
    <h1>Create Member</h1>
    <form action="{{ route('members.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" class="form-control w-full border" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" class="form-control w-full border" required>
        </div>
        {{-- <div>
            <label>Team</label>
            <select name="team_id" class="form-control w-full border">
                <option value="">No Team</option>
                @foreach($members as $member)
                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                @endforeach
            </select>
        </div> --}}
        <div>
            <label>Role</label>
            <select name="role" class="form-control w-full border" required>
                <option value="member">Member</option>
                <option value="coach">Coach</option>
                <option value="manager">Manager</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
