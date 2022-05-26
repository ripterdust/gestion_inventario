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

        <div class="icon"><i class="fa-solid fa-coins"></i></div>
    </div>
    <div class="metric">
        <div class="text">
            <div class="title">Clientes mes</div>
            <div class="number">
                80
            </div>
        </div>

        <div class="icon"><i class="fa-solid fa-users"></i></div>
    </div>
    <div class="metric">
        <div class="text">
            <div class="title">Total examenes</div>
            <div class="number">
                {{ $tests }}
            </div>
        </div>

        <div class="icon"><i class="fa-solid fa-flask-vial"></i></div>
    </div>
    <div class="metric">
        <div class="text">
            <div class="title">Ganancias del mes</div>
            <div class="number">
                Q.3425.45
            </div>
        </div>

        <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
    </div>
</div>


<div class="chart">
    <div class="title">Ventas del último mes.</div>
    <canvas id="salesChart" class="chartCanvas" height="400"></canvas>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script src="{{asset('js/salesChart.js')}}"></script>
@endsection