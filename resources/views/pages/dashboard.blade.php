@extends('layouts.app')

@section('title', 'APEEAC - L\'Association')

@section('content')

    <div class="navbar">
        <div class="welcome">
            Bienvenue, {{ Auth::user()->name }} !
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Déconnexion</button>
        </form>

    </div>

@endsection