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
        <div class="metric">
            <div class="text">
                <div class="title">Total de paquetes</div>
                <div class="number">{{ $packCount }}</div>
            </div>
            <div class="icon">
                <i class="fa-solid fa-boxes-packing"></i>
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

    <div class="box mt-1 title-section">
        <div class="title title-with-btn">
            Paquetes de laboratorios  <a href="{{ route('test.new') }}" class="button">Nuevo paquete</a>
        </div>
    </div>

    <div class="grid mt-2">
        @foreach($packs as $pack)
            <a class="card" href="#">
                <div class="title"> {{ $pack->name }} </div>
                <div class="description">
                    @if($pack->description)
                        {{ $pack-> description }}
                    @else
                        N/A
                    @endif
                </div>
                <ul class="content">
                    <li>Nombre examen</li>
                </ul>
                <div class="price">
                    Q. 10.00
                </div>
                <div class="button">
                    Comprar
                </div>
            </a>
        @endforeach
        
    </div>
  
@endsection