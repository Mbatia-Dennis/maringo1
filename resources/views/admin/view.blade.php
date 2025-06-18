@extends('layouts.app')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container py-4">
    <h1 class="mb-4">Welcome, {{ Auth::user()->name }}!</h1>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-people-fill display-4 me-3"></i>
                        <div>
                            <h5 class="card-title">Teams</h5>
                            <p class="card-text fs-2">{{ $teamsCount }}</p>
                            <a href="{{ route('teams.index') }}" class="btn btn-light btn-sm">View Teams</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-person-badge-fill display-4 me-3"></i>
                        <div>
                            <h5 class="card-title">Members</h5>
                            <p class="card-text fs-2">{{ $membersCount }}</p>
                            <a href="{{ route('members.index') }}" class="btn btn-light btn-sm">View Members</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-trophy-fill display-4 me-3"></i>
                        <div>
                            <h5 class="card-title">Games</h5>
                            <p class="card-text fs-2">{{ $gamesCount }}</p>
                            <a href="{{ route('games.index') }}" class="btn btn-light btn-sm">View Games</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more cards for patrons, items, captains as needed -->
        <div class="col-md-4">
            <div class="card text-white bg-warning h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-star-fill display-4 me-3"></i>
                        <div>
                            <h5 class="card-title">Patrons</h5>
                            <p class="card-text fs-2">{{ $patronsCount }}</p>
                            <a href="{{ route('patrons.index') }}" class="btn btn-light btn-sm">View Patrons</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-box-seam display-4 me-3"></i>
                        <div>
                            <h5 class="card-title">Items</h5>
                            <p class="card-text fs-2">{{ $itemsCount }}</p>
                            <a href="{{ route('items.index') }}" class="btn btn-light btn-sm">View Items</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-person-fill-check display-4 me-3"></i>
                        <div>
                            <h5 class="card-title">Captains</h5>
                            <p class="card-text fs-2">{{ $captainsCount }}</p>
                            <a href="{{ route('captains.index') }}" class="btn btn-light btn-sm">View Captains</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
