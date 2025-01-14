@extends('layouts.auth')
@section('title', "Page de connexion")
@section('content')
    <h1>Connexion</h1>
    <p class="account-subtitle">Acceder au dashboard</p>
    <form action="{{route('login')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="Email">
            @error('email')
            <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" value="{{old('password')}}" placeholder="Mot de passe">
            @error('password')
            <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Se connecter</button>
        </div>
    </form>
    <div class="text-center forgotpass">
        <a href="forgot-password.html">Mot de passe oublie?</a>
    </div>
    <div class="text-center dont-have">
        Vous n'avez pas de compt?
        <a href="{{route('register')}}">S'inscrire</a>
    </div>
@endsection
