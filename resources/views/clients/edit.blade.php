@extends('layouts.app')

@section('title', 'Nuevo cliente')


@section('content')

    <div class="box">
        <div class="title">Editar paciente</div>

        {{-- Form to add the client --}}

        <form action="{{ route('clients.patch', ['id' => $client->id]) }}" method="post" class="form">
        @csrf
        @method('PATCH')
            
            @error('mail')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

            @error('phone')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

            @error('nit')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

            @error('name')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
            @error('birth')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror

            @error('adress')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
            
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
                    type="date" 
                    name="birth"
                    autocomplete="off"
                    placeholder=" "
                    class="form-control-input"
                    value="{{ $client->birth }}"
                    required/>
            </div>

            <div class="form-control">
                <input 
                type="email"
                class="form-control-input"
                autocomplete="off"
                placeholder=" "
                name="mail"
                value={{ $client->mail }}
                required/>
                <label for="mail" class="form-control-label">Correo electrónico</label>    
            </div>

            
            <div class="form-control">
                <input 
                    type="text" 
                    name="nit"
                    autocomplete="off"
                    placeholder=" "
                    class="form-control-input"
                    value="{{ $client->nit }}"
                    required/>
                <label for="nit" class="form-control-label">Nit</label>
            </div>

            <div class="form-control">
                <input 
                type="text"
                class="form-control-input"
                autocomplete="off"
                placeholder=" "
                name="adress"
                value="{{ $client->adress }}"
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
                value="{{ $client->phone }}"
                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                required/>
                <label for="phone" class="form-control-label">Teléfono</label>
            </div>


            

            <div class="form-submit">
                <button class="button">Agregar cliente</button>
            </div>
        </form>

    </div>

@endsection