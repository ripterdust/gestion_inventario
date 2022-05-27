@extends('layouts.app')

@section('title', 'Laboratorios')

@section('content')
    <div class="metrics">
        <div class="metric">
            <div class="text">
                <div class="title">Total laboratorios</div>
                <div class="number">{{ $count }}</div>
            </div>
            <div class="icon">
                <i class="fa-solid fa-virus-covid"></i>
            </div>
        </div>
    </div>

    <div class="box table_list">
        <div class="title">
            Laboratorios
        </div>

        <table class="table">

            <!-- Table head -->
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
            </tr>

            <!-- Table body -->
            <tr>
                <td>Hematología completa</td>
                <td>Hematología</td>
                <td>Q.100.00</td>
            </tr>
        </table>
    </div>
@endsection