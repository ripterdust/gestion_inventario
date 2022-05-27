@extends('layouts.app')

@section('title', 'Ventas')

@section('content')
<div class="metrics">
    <div class="metric">
        <div class="text">
            <div class="title">Total ventas</div>
            <div class="number">1000</div>
        </div>
        <div class="icon">
            <i class="fa-solid fa-money-bill-trend-up"></i>
        </div>
    </div>
    <div class="metric">
        <div class="text">
            <div class="title">Ventas del mes</div>
            <div class="number">1000</div>
        </div>
        <div class="icon">
            <i class="fa-solid fa-coins"></i>
        </div>
    </div>
</div>

@endsection