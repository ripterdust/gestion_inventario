@extends('layouts.app')

@section('title', 'Exámenes')


@section('content')
    <div class="metrics">
        <div class="metric">
            <div class="text">
                <div class="title">Exámenes del mes</div>
                <div class="number">
                    20
                </div>
            </div>

            <div class="icon"><i class="fa-solid fa-vial"></i></div>
        </div>
    </div>

    <div class="table_list box">
        <div class="title">Exámenes</div>

        <table class="table">
            <!-- Table title -->
            <tr>
                <th>Cliente</th>
                <th>Examen</th>
                <th>Ingreso</th>
                <th>Estado</th>
                <th></th>
            </tr>

            <!-- Table body -->
            <tr>
                <td>Juanito perex</td>
                <td>Hemoglobina</td>
                <td>12/02/22</td>
                <td>Proceso</td>
                <td>
                    <a class="action">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </td>
            </tr>

        </table>
    </div>
@endsection