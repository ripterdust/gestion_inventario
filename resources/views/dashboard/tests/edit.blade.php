@extends('layouts.app')

@section('title', 'Agregar información')

@section('content')

<div class="box">
    <div class="title">{!! $name !!}</div>

    <form action="{{ route('test.patch', ['id' => $id]) }}" method="post" class="formDataTest">
        @method('post')
        @csrf
        <div class="params" id="params"></div>
        <input type="submit" value="Guardar" class="button" />
    </form>
</div>

<script>
    const parameters = JSON.parse({!! $parameters !!}[0]?.parameters);
    const form = document.querySelector('#params');
    Object.keys(parameters).map((paramFind) => {
        const param = parameters[paramFind];
        form.innerHTML += `
            <div class="param">
                <span class="name">${paramFind}</span>
                <input type="text" class="value" name="${paramFind}" placeholder="Ingresa el valor" />
                <span class="paramsTest">${param}</span>
            </div>
        `;
    })

</script>
@endsection