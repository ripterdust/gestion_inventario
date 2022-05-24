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
    <div class="titulo">
        <i class="fa-solid fa-store"></i>
        <span>Dashboard</span>
    </div>

    <div class="options">
        <a href="{{route('home')}}" class="option">
            <i class="fa-solid fa-house"></i>
            <span>Inicio</span>
        </a>
        <a href="" class="option">
            <i class="fa-solid fa-users"></i>
            <span>Clientes</span>
        </a>
        <a href="" class="option">
            <i class="fa-solid fa-bag-shopping"></i>
            <span>Proveedores</span>
        </a>

        <a href="" class="option">
            <i class="fa-solid fa-box"></i>
            <span>Productos</span>
        </a>
        <a href="" class="option">
            <i class="fa-solid fa-money-bill-trend-up"></i>
            <span>Ventas</span>
        </a>
    </div>
</aside>

<div class="dashboard">
    <div class="nav">
        <div class="name">
            {{ auth()->user()->name }}
        </div>

        <a href="{{route('login.out')}}" class="aut">Cerrar Sesión</a>
    </div>
</div>

<!-- Document body -->
@yield('content')
  
  
</body>
</html>