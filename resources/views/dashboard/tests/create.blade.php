@extends('layouts.app')

@section('title', 'Nuevo examen')

@section('content')
    <div class="box">
        <div class="title">
            Nuevo examen
        </div>

        <div class="form">
            <div class="form-control">
                <label for="Client">Nompre cliente:</label>
                <input type="text" name="client" id="clientAutocomplete" />
            </div>

            <div class="form-control">
                <label for="">Examen:</label>
                <input type="text" name="testName" id="testAutocomplete">
            </div>
        </div>
    </div>
@endsection