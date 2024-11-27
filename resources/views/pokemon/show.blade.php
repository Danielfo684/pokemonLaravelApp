
@extends('base')
@section('title', 'Detalles del Pokémon')
@section('content')
    
    <div class="form-group">
        Nombre del Pokémon:
        {{$pokemon->nombre}}
    </div>
    <div class="form-group">
        Peso del Pokémon:
        {{$pokemon->peso}} kg
    </div>
    <div class="form-group">
        Altura del Pokémon:
        {{$pokemon->altura}} m
    </div>
    <div class="form-group">
        Tipo del Pokémon:
        {{$pokemon->tipo}}
    </div>
    <div class="form-group">
       Nivel:
        {{$pokemon->nivel}}
    </div>
    <div class="form-group">
       Evolución:
        {{$pokemon->evolucion}}
    </div>
    <div class="form-group">
        <a href="{{url()->previous()}}">Volver</a>
    </div>
@endsection