@extends('layouts.app')

@section('title', 'Agregar cliente')

@section('content')

    <div class="metrics">
        <div class="metric">
            <div class="text">
                <div class="title">Total Pacientes</div>
                <div class="number">
                    {{ $total }}
                </div>
            </div>
            <div class="icon">
                <i class="fa-solid fa-hospital-user"></i>
            </div>
        </div>
    </div>
    <div class="box table_list">
        <div class="title title-with-btn">
            Pacientes

            <a href="{{ route('clients.new') }}" class="button">Nuevo Paciente</a>
        </div>    

        <table class="table">
            <!-- Title -->

            <tr>
                <th>Nombre</th>
                <th>Nit</th>
                <th>Correo</th>
                <th></th>
            </tr>

            <!-- List of clients -->
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->nit }}</td>
                    <td>{{ $client->mail }}</td>
                    <td>
                        <a href="{{ route('client.edit', ['id' => $client->id]) }}" class="action mr">
                            <i class="fa-solid fa-user-pen"></i>
                        </a>
                        <a href="" class="action">
                            <i class="fa-solid fa-ban"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection