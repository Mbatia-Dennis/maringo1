@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1>Welcome to Maringo Sports Club</h1>
    <p>Manage your sports club efficiently with our comprehensive management system.</p>
    <p>Features include:</p>
    <ul>
        <li>Team management</li>
        <li>Member management</li>
        <li>Game scheduling</li>
        <li>Patron management</li>
        <li>Item inventory</li>
        <li>Captain assignments</li>
    </ul>
    <p>Get started by logging in or registering to manage your club.</p>
    <p>For more information, visit our <a href="shiftechafrica.com">website</a>.</p>
    <p>Contact us at <a href="mailto:
    @if (auth()->check())
        <p>View:
            <a href="{{ route('teams.index') }}">Teams</a> |
            <a href="{{ route('members.index') }}">Members</a> |
            <a href="{{ route('games.index') }}">Games</a> |
            <a href="{{ route('patrons.index') }}">Patrons</a> |
            <a href="{{ route('items.index') }}">Items</a> |
            <a href="{{ route('captains.index') }}">Captains</a>
        </p>
    @else
        <p>
            <a href="{{ route('login') }}">Login</a> or
            <a href="{{ route('register') }}">Register</a> to manage the club.
        </p>
    @endif
@endsection
