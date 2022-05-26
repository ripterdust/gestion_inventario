@extends('layouts.app')

@section('title', 'Nuevo examen')

@section('content')
    <div class="box">
        <div class="title">
            Nuevo examen
        </div>

        <form method="post" action="{{route('test.store')}}" class="form">
            @method('post')
            @csrf
            @error('name')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-control">
                <label for="Client">Nombre cliente:</label>
                <input type="text" name="client" id="clientAutocomplete" placeholder="Nombre" required/>
            </div>

            <div class="form-control">
                <label for="test">Examen:</label>
                <select name="test" id="test">
                    <option value="Hematologia">Hematologia</option>
                </select>
            </div>

            <div class="form-submit">
                <button type="submit" class="button">Nuevo examen</button>
            </div>
        </form>
    </div>
@endsection