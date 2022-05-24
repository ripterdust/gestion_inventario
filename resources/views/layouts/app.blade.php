<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>@yield('title')</title>
</head>
<body>
<nav>

    <a href="{{route('home')}}" class="name">
        Software AT
    </a>

    <div class="content">
        <div class="user">
            {{ session()->get('name') }}
        </div>
    </div>
</nav>
    

<!-- Document body -->
  @yield('content')
</body>
</html>