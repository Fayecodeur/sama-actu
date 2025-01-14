@extends('layouts.auth')
@section('title', "Page d'inscription")
@section('content')
    <h1 class="mb-3">S'inscrire</h1>
    <form action="{{'register'}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Nom complet">
            @error('name')
                <span class=text-danger">{{$message}}</span>
            @enderror
        </div>
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
            <input class="form-control" type="password" name="password_confirmation"  placeholder="Confirmer Mot de passe">
            @error('password_confirmation')
            <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group mb-0">
            <button class="btn btn-primary btn-block" type="submit">S'inscrire</button>
        </div>
    </form>

    <div class="text-center dont-have">Vous avez deja un compte? <a href="login.html">Se connecter</a>
    </div>
@endsection
