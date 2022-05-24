@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<div class="form-container">
    <h1 class="title">Iniciar sesión</h1>

    <form method="POST" action=" {{route('login.store')}} " class="authForm">
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
        
        <input type="email" name="email" />
        <input type="password" name="password" />
        

        <input type="submit" value="Login" />
    </form>
</div>
@endsection