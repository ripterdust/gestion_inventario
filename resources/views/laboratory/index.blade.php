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
                    
                    <td>{{ $laboratory->name }}</td>
                    <td>{{ $laboratory->category }}</td>
                    <td>Q.{{ number_format($laboratory->price, 2) }}</td>
                </tr>
            @endforeach
            
        </table>

        <div class="pagination">
            @if ($laboratories->links()->paginator->hasPages())
                {{ $laboratories->links()}}
            @endif
        </div>
    </div>
    <div class="grid mt-2">
        @foreach($packs as $pack)
            <a class="card" href="{{ route('pack.show', ['id' => $pack->pack_id]) }}">
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
                    Q. {{ round($pack->price, 3) }}
                </div>
                <div class="button">
                    Comprar
                </div>
            </a>
        @endforeach
        
    </div>
  
@endsection