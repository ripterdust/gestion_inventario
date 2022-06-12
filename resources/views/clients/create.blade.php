@extends('layouts.app')

@section('title', 'Nuevo cliente')


@section('content')

    <div class="box">
        <div class="title">Nuevo paciente</div>

        {{-- Form to add the client --}}

        <form action="/" method="post" class="form">
        @csrf
        @method('POST')
        
        <div class="form-control">
            <input 
            type="text"
            class="form-control-input"
            autocomplete="off"
            placeholder=" " 
            required/>
            <label for="name" class="form-control-label">Nombre paciente</label>    
        </div>
        </form>

    </div>

@endsection