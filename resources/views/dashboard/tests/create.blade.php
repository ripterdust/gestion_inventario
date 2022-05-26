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
                <label for="test">Categoría:</label>
                <select name="test" id="test">
                    @foreach($categories as $category)
                        <option value="{{ $category->category }}">
                            {{ $category->category }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{ $laboratories }}

            <div class="form-submit">
                <button type="submit" class="button">Nuevo examen</button>
            </div>
        </form>
    </div>
@endsection