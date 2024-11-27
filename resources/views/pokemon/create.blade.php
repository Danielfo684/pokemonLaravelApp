
@extends('base')
@section('title', 'Crear Pokémon')
@section('content')
    <form action="{{url('pokemon')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Pokémon</label>
            <input value="{{old('nombre')}}" required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Pokémon">
        </div>
        <div class="form-group">
            <label for="peso">Peso del Pokémon</label>
            <input value="{{old('peso')}}" required type="number" step="0.001" class="form-control" id="peso" name="peso" placeholder="Peso del Pokémon">
        </div>
        <div class="form-group">
            <label for="altura">Altura del Pokémon</label>
            <input value="{{old('altura')}}" required type="number" step="0.001" class="form-control" id="altura" name="altura" placeholder="Altura del Pokémon">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo del Pokémon</label>
            <input value="{{old('tipo')}}" required type="text" class="form-control" id="tipo" name="tipo" placeholder="Fuego, Agua o Planta">
        </div>
        <div class="form-group">
            <label for="nivel">Nivel del Pokémon</label>
            <input value="{{old('nivel')}}" required type="number" class="form-control" id="nivel" name="nivel" placeholder="Nivel del Pokémon">
        </div>
        <div class="form-group">
            <label for="evolucion">Evolución del Pokémon</label>
            <input value="{{old('evolucion')}}" required type="text" class="form-control" id="evolucion" name="evolucion" placeholder="Evolución del Pokémon">
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
@endsection