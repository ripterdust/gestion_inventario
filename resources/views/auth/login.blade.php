@extends('layouts.auth')
@section('title', 'Login')

@section('content')

<div>
    <h1>lOGIN</h1>

    <form method="POST" action=" {{route('login.store')}} " class="mt-4">
        @csrf

        @error('message')
            <div class="error"></div>
        @enderror
        <input type="email" name="email" />
        <input type="password" name="password" />

        <input type="submit" value="Login">
    </form>
</div>
@endsection