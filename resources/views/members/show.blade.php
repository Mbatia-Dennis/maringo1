@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Member Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $member->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $member->email }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $member->phone ?? 'N/A' }}</p>
            <!-- Add more fields as needed -->
            <a href="{{ route('members.index') }}" class="btn btn-secondary">Back to Members</a>
        </div>
    </div>
</div>
@endsection
