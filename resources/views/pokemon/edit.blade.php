
@extends('base')
@section('title', 'Editar Pokémon')
@section('content')
    <form action="{{url('pokemon/' . $pokemon->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nombre">Nombre del Pokémon</label>
            <input value="{{old('nombre', $pokemon->nombre)}}" required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Pokémon">
        </div>
        <div class="form-group">
            <label for="peso">Peso del Pokémon</label>
            <input value="{{old('peso', $pokemon->peso)}}" required type="number" step="0.001" class="form-control" id="peso" name="peso" placeholder="Peso del Pokémon">
        </div>
        <div class="form-group">
            <label for="altura">Altura del Pokémon</label>
            <input value="{{old('altura', $pokemon->altura)}}" required type="number" step="0.001" class="form-control" id="altura" name="altura" placeholder="Altura del Pokémon">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo del Pokémon</label>
            <input value="{{old('tipo', $pokemon->tipo)}}" required type="text" class="form-control" id="tipo" name="tipo" placeholder="Fuego, Agua o Planta">
        </div>
        <div class="form-group">
            <label for="nivel">Nivel del Pokémon</label>
            <input value="{{old('nivel', $pokemon->nivel)}}" required type="nivel" class="form-control" id="nivel" name="nivel" placeholder="Nivel del Pokémon">
        </div>
        <div class="form-group">
            <label for="evolucion">Evolución del Pokémon</label>
            <input value="{{old('evolucion', $pokemon->evolucion)}}" required type="evolucion" class="form-control" id="evolucion" name="evolucion" placeholder="Evolución del Pokémon">
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection