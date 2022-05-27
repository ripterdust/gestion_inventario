@extends('layouts.app')

@section('title', 'Agregar información')

@section('content')

<div class="box">
    <div class="title">{{ $name }}</div>

    <form method="post" action="" class="test-form" id="form-test">
        @method('post')
        @csrf
        <div class="params" id="params">
        </div>
        <input type="submit" value="Validar datos" class="button" />
    </form>
</div>


<script>
    const parameters = JSON.parse({!! $parameters !!}[0]?.parameters);
    const form = document.querySelector('#params');

    Object.keys(parameters).map((paramFind) => {
        const param = parameters[paramFind];
        form.innerHTML += `
            <div class="test-container">
                <span class="name">${paramFind}</span>
                <input type="text" class="value" name="${paramFind}" />
                <span class="params">${param}</span>
            </div>
        `;
    })

</script>
@endsection