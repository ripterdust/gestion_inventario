@extends('layouts.app')

@section('title', 'Agregar información')

@section('content') 

<div class="box">
    <div id="title" class="title">---</div>

    <form action="{{route('test.patch', ['id' => $id])}}" method="post" class="formDataTest">
        @method('PATCH')
        @csrf
        <div class="params" id="params"></div>
        <input type="submit" value="Guardar" class="button" />
    </form>
</div>

<script>
    console.log({!! $parameters !!});
    //const parameters = JSON.parse({!! $parameters !!});
    const parameters = {!! $parameters !!};
    const form = document.querySelector('#params');
    const title = document.querySelector('#title');
    Object.keys(parameters).map((paramFind) => {
        const {TESTName, field_id, field_pm, field_rgmin, field_rgmax, field_tp} = parameters[paramFind];
        placeholder = `${field_rgmin} - ${field_rgmax} ${field_tp}`
        form.innerHTML += `
            <div class="param">
                <span class="name">${field_pm}</span>
                <input type="text" class="value" name="${field_pm}" placeholder="${placeholder}" />
                <span class="paramsTest">${placeholder}</span>
            </div>
        `;
        title.innerHTML = TESTName;
    })

</script>
@endsection