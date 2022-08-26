@extends('layouts.app')

@section('title', 'Paquetes de exámenes')

@section('content')
    
    <div class="metrics">
         <div class="metric">
            <div class="text">
                <div class="title">Total de paquetes</div>
                <div class="number">{{ $count }}</div>
            </div>
            <div class="icon">
                <i class="fa-solid fa-boxes-packing"></i>
            </div>
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