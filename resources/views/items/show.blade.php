@extends('layouts.app')
@section('title', 'Item Details')
@section('content')
<div class="container">
    <h1>Item: {{ $item->name }}</h1>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('items.edit', $item) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('items.index') }}" class="btn btn-secondary">Back to Items</a>
        </div>
    </div>
</div>
@endsection
