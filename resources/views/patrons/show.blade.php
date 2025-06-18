@extends('layouts.app')
@section('title', 'Patron Details')
@section('content')
<div class="container">
    <h1>Patron: {{ $patron->name }}</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Contact:</strong> {{ $patron->contact ?? 'N/A' }}</p>
            <a href="{{ route('patrons.edit', $patron) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('patrons.index') }}" class="btn btn-secondary">Back to Patrons</a>
        </div>
    </div>
</div>
@endsection
