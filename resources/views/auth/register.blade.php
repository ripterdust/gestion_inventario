@extends('layouts.auth')
@section('title', 'Registrarse')

@section('content')

    <h1>Registrarse</h1>

    <form method="POST" action=" {{route('register.store')}} " class="authForm">
        @method('post')
        @csrf
        @error('message')
            <div class="error">Correo o contraseña inválidos o inexistentes</div>
        @enderror
        @error('email')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        @error('password')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        @error('name')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        @error('confirm_password')
            <div class="error">
                {{ $message }}
            </div>
        @enderror
        
        <input type="email" name="email" />
        <input type="text" name="name" />
        <input type="password" name="password" />
        <input type="password" name="password_confirmation" />
        <input type="submit" value="Registrarse">
    </form>
@endsection