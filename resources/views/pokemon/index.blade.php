@extends('base')
@section('title', 'Lista de Pokémon')
@section('content')
    <table class="table table-striped table-hover" id="tablaPokemon">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Tipo</th>
                <th>Nivel</th>
                <th>Evolución</th>
                @if(session('user'))
                    <th>Eliminar</th>
                    <th>Editar</th>
                @endif
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pokemon as $pokemon)
                <tr>
                    <td>{{$pokemon->id}}</td>
                    <td>{{$pokemon->nombre}}</td>
                    <td>{{$pokemon->peso}} Kilos</td>
                    <td>{{$pokemon->altura}} metros</td>
                    <td>{{$pokemon->tipo}}</td>
                    <td>{{$pokemon->nivel}}</td>
                    <td>{{$pokemon->evolucion}}</td>
                    @if(session('user'))
                        <td><a href="#" data-href="{{url('pokemon/' . $pokemon->id)}}" class="borrar">Eliminar</a></td>
                        
                        <td><a href="{{url('pokemon/' . $pokemon->id . '/edit')}}">Editar</a></td>
                    @endif
                    <td><a href="{{url('pokemon/' . $pokemon->id)}}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        @if(session('user'))
            <a href="{{url('pokemon/create')}}" class="btn btn-success">Añadir Pokémon</a>
            <form id="formDelete" action="{{ url('') }}" method="post">
                @csrf
                @method('delete')
            </form>
        @endif
    </div>
@endsection
@section('scripts')
    <script src="{{url('assets/scripts/script.js')}}"></script>
@endsection