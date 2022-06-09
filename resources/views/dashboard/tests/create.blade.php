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
                <label for="Client">Nombre paciente:</label>
                <select name="client" id="clientAutocomplete" required>
                    @foreach($clients as $client)
                        <option value="{{ $client->name }}">
                            {{ $client->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-control">
                <label for="test">Categoría:</label>
                <select name="category" id="test" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->category }}">
                            {{ $category->category }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-control">
                <label for="test">Examen:</label>
                <select name="test" id="laboratory" required>
                    
                </select>
                
            </div>

            

            <div class="form-submit">
                <button type="submit" class="button">Nuevo examen</button>
            </div>
        </form>
    </div>

    <script>
        const laboratories = {!! $laboratories !!};
        console.log(laboratories)
    </script>
    <script src="{{ asset('js/fixByCategory.js') }}"></script>
@endsection