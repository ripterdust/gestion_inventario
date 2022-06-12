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
                name="name"
                required/>
                <label for="name" class="form-control-label">Nombre completo</label>    
            </div>

            <div class="form-control">
                <input 
                type="email"
                class="form-control-input"
                autocomplete="off"
                placeholder=" "
                name="email"
                required/>
                <label for="email" class="form-control-label">Correo electrónico</label>    
            </div>

            <div class="form-control">
                <input 
                type="text"
                class="form-control-input"
                autocomplete="off"
                placeholder=" "
                name="adress"
                required/>
                <label for="adress" class="form-control-label">Dirección</label>
            </div>
                    
            <div class="form-control">
                <input 
                type="text"
                class="form-control-input"
                autocomplete="off"
                placeholder=" "
                name="phone"
                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                required/>
                <label for="phone" class="form-control-label">Teléfono</label>
            </div>
        </form>

    </div>

@endsection