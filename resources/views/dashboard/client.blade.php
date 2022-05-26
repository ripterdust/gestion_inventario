@extends('layouts.app')

@section('title', 'Agregar cliente')

@section('content')

    <div class="metrics">
        <div class="metric">
            <div class="text">
                <div class="title">Total Pacientes</div>
                <div class="number">
                    100
                </div>
            </div>
            <div class="icon">
                <i class="fa-solid fa-hospital-user"></i>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="title title-with-btn">
            Pacientes

            <a href="/" class="button">Nuevo Paciente</a>
        </div>    
    </div>
@endsection