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
         <div class="title title-with-btn">Laboratorios <a href="{{ route('test.new') }}" class="button">Nuevo laboratorio</a></div>

        <table class="table">

            <!-- Table head -->
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
            </tr>

            <!-- Table body -->
            @foreach($laboratories as $laboratory)
                <tr>
                    
                    <td>{{ $laboratory->lab_name }}</td>
                    <td>{{ $laboratory->category }}</td>
                    <td>Q.{{ number_format($laboratory->lab_pc, 2) }}</td>
                </tr>
            @endforeach
            
        </table>

        <div class="pagination">
            @if ($laboratories->links()->paginator->hasPages())
                {{ $laboratories->links()}}
            @endif
        </div>
    </div>
@endsection