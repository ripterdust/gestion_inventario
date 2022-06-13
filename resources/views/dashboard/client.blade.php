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

    <div class="search">
        <form action="{{ route('clients') }}" method="GET" class="form">
            <div class="form-control">
                <input type="text" class="form-control-input" name="search" placeholder=" "/>
                <label for="search" class="form-control-label">Búsqueda</label>
            </div>
        </form>
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
                        <a href="{{ route('clients.destroy', ['id' => $client->id]) }}" class="action">
                            <i class="fa-solid fa-ban"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>

        {{-- Pagination --}}
        <div class="pagination">
            @if ($clients->links()->paginator->hasPages())
                {{ $clients->links() }}
            @endif
        </div>
    </div>
@endsection