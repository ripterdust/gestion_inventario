<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<aside>
    <div class="title">
        <i class="fa-solid fa-store"></i>
        <span>Dashboard</span>
    </div>

    <div class="options">
        <a href="{{route('home')}}" class="option">
            <i class="fa-solid fa-house"></i>
            <span>Inicio</span>
        </a>
        <a href="/prueba" class="option">
            <i class="fa-solid fa-flask-vial"></i>
            <span>Examenes</span>
        </a>

        <a href="{{route('employees')}}" class="option">
            <i class="fa-solid fa-people-carry-box"></i>
            <span>Empleados</span>
        </a>
        <a href="/prueba" class="option">
            <i class="fa-solid fa-users"></i>
            <span>Cliente</span>
        </a>
        
        <a href="/prueba" class="option">
            <i class="fa-solid fa-money-bill-trend-up"></i>
            <span>Ventas</span>
        </a>
        
    </div>
</aside>

<div class="dashboard">
    <div class="nav">
        <a href="" class="name">
            {{ auth()->user()->name }}
        </a>

        <a href="{{route('login.out')}}" class="out">Cerrar Sesión</a>
    </div>
    
    <!-- Document body -->
    @yield('content')
    <script src="{{asset('js/activeNavLink.js')}}"></script>
</div>

</body>
</html>