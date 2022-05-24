@extends('layouts.app')
@section('title', 'Inventario')

@section('content')

<div class="metrics">
    <div class="metric">
        <div class="text">
            <div class="title">Ganancias de hoy</div>
            <div class="number">
                Q.100.00
            </div>
        </div>

        <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
    </div>
    <div class="metric">
        <div class="text">
            <div class="title">Ganancias de hoy</div>
            <div class="number">
                Q.100.00
            </div>
        </div>

        <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
    </div>
    <div class="metric">
        <div class="text">
            <div class="title">Ganancias de hoy</div>
            <div class="number">
                Q.100.00
            </div>
        </div>

        <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
    </div>
    <div class="metric">
        <div class="text">
            <div class="title">Ganancias de hoy</div>
            <div class="number">
                Q.100.00
            </div>
        </div>

        <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
    </div>
</div>


<div class="chart">
    <div class="title">Ventas del último mes.</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script src="{{asset('js/salesChart.js')}}"></script>
@endsection