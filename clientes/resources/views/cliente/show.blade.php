@extends('layouts.app')

@section('content')

<div class="row text-center">
    <div>
        <h2>De tales</h2>
        <a href="{{route('clientes.index')}}" class="btn btn-primary"></a>
    </div>
</div>

<div class="m-5">
    <h3>Id rol: {{$cliente->rolId}}</h3>
    <h3>Fecha de registro: {{$cliente->cliFechaRegistro}}</h3>
    <h3></h3>
</div>

@endsection 