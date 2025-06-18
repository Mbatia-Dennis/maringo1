@extends('layouts.app')
@section('title', 'Welcome to Maringo Sports Club')
@section('content')

<link href="https://fonts.googleapis.com/css2?family=Rubik+Glitch&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<style>
    body {
        background: linear-gradient(135deg, #fceabb, #f8b500);
        font-family: 'Poppins', sans-serif;
        color: #2c3e50;
    }

    .header {
        text-align: center;
        padding: 40px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 20px;
        backdrop-filter: blur(8px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        margin-bottom: 50px;
    }

    .header h1 {
        font-family: 'Rubik Glitch', cursive;
        font-size: 3.5rem;
        color: #227e1a;
        animation: glow 2s ease-in-out infinite alternate;
    }

    .header p {
        font-size: 1.3rem;
        font-style: italic;
        color: #23283e98;
    }

    @keyframes glow {
        from {
            text-shadow: 0 0 5px #ffeb3b, 0 0 10px #ffeb3b;
        }
        to {
            text-shadow: 0 0 20px #fbc02d, 0 0 30px #f57f17;
        }
    }

    .dashboard-card {
        background: white;
        border-radius: 20px;
        padding: 30px;
        transition: 0.3s;
        box-shadow: 0 12px 24px rgba(0,0,0,0.2);
        text-align: center;
    }

    .dashboard-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 16px 32px rgba(0,0,0,0.25);
    }

    .dashboard-card i {
        font-size: 3rem;
        color: #f57f17;
        margin-bottom: 15px;
    }

    .dashboard-card h3 {
        font-weight: 700;
        color: #1b1b1b;
    }

    .dashboard-card p {
        color: #555;
    }

    .btn-custom {
        background: #1a237e;
        color: white;
        border-radius: 25px;
        padding: 10px 25px;
        font-weight: bold;
    }

    .btn-custom:hover {
        background: #0d47a1;
        color: #fff;
    }

    .logo {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid white;
        box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    .footer {
        text-align: center;
        margin-top: 60px;
        color: #444;
        font-size: 0.9rem;
    }
</style>

<div class="container">
    <div class="header">
        <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png" class="logo" alt="Club Logo">
        <h1>Maringo Sports Club</h1>
        <p>“USICHEZE NA MBATIA SHAKELESS”</p>
    </div>

    <div class="row gy-4">
        <div class="col-md-4">
            <div class="dashboard-card">
                <i class="fas fa-users"></i>
                <h3>Members</h3>
                <p>Register and view club members</p>
                <a href="{{ route('members.index') }}" class="btn btn-custom mt-2">Go to Members</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dashboard-card">
                <i class="fas fa-user-tie"></i>
                <h3>Teams</h3>
                <p>Manage football, basketball & other teams</p>
                <a href="{{ route('teams.index') }}" class="btn btn-custom mt-2">Go to Teams</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card">
                <i class="fas fa-user-tie"></i>
                <h3>Captain</h3>
                <p>Assign captains to teams, view captain profiles, and update captain info</p>
                <a href="{{ route('captains.index') }}" class="btn btn-custom mt-2">Go to Captains</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card">
                <i class="fas fa-users-cog"></i>
                <h3>Patrons</h3>
                <p>Manage club patrons and their contributions</p>
                <a href="{{ route('patrons.index') }}" class="btn btn-custom mt-2">Go to Patrons</a>
            </div>
        </div>
         <div class="col-md-4">
            <div class="dashboard-card">
                <i class="fas fa-users-cog"></i>
                <h3>Items</h3>
                <p>Manage store items and their dstributions</p>
                <a href="{{ route('items.index') }}" class="btn btn-custom mt-2">Go to Items</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card">
                <i class="fas fa-trophy"></i>
                <h3>Games</h3>
                <p>Track match schedules & results</p>
                <a href="{{ route('games.index') }}" class="btn btn-custom mt-2">Go to Games</a>
            </div>
        </div>
    </div>

    <div class="footer mt-5">
        &copy; {{ date('Y') }} Maringo Sports Club — Designed with ❤️ in Nairobi
    </div>
</div>
@endsection
