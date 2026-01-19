@extends('layouts.app')

@section('title', 'APEEAC - L\'Association')

@section('content')

    <div class="container">
        <h1>Connexion</h1>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">Se connecter</button>
        </form>

    </div>
@endsection