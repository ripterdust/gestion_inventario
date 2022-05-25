@extends('layouts.app')

@section('title', 'Employees')

@section('content')
    <div class="table_list employees box">
        <div class="title">Empleados</div>

        <table class="table">
            <tr>
                <th>Empleado</th>
                <th>Función</th>
                <th>Ingreso</th>
                <th></th>
            </tr>

            <!-- Emplooyes -->

            @foreach($employees as $employee)
                <tr>
                    <td class="">
                        <div class="name">
                            {{ $employee->name }}
                        </div>
                        <div class="mail">
                            {{ $employee->mail }}
                        </div>
                    </td>
                    <td>
                        <div class="position">
                            {{ $employee->position }}
                        </div>
                        <div class="department">
                            {{ $employee->department }}
                        </div>
                    </td>
                    <td>
                        <div class="date">
                            {{ $employee->joined }}
                        </div>
                    </td>
                    <td>
                        <a href="" class="action">
                            <i class="fa-solid fa-user-pen"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection