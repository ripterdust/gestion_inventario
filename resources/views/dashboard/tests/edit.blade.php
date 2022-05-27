@extends('layouts.app')

@section('title', 'Agregar información')

@section('content')

<div class="box">
    <div class="title">{{ $name }}</div>

</div>


<script>
    const parameters = JSON.parse({!! $parameters !!}[0]?.parameters);
    console.log(parameters)
</script>
@endsection