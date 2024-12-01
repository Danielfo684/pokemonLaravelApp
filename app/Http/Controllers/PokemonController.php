<?php
namespace App\Http\Controllers;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('pokemon.index', 
            [
                'lipokemon' => 'active',
                'pokemon' => Pokemon::orderBy('nombre')->get(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('pokemon.create', ['lipokemon' => 'active']);
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'  => 'required|unique:pokemon|max:50|min:3',
            'peso'    => 'required|numeric|gte:0|lte:900',
            'altura'  => 'required|numeric|gte:0|lte:100',
            'tipo'    => 'required|in:Agua,Fuego,Planta,AGUA,FUEGO,PLANTA,agua,fuego,planta',
            'nivel'  => 'required|numeric|gte:1|lte:100',
            'evolucion' => 'required |numeric|gte:1|lte:3',
        ]);
        $pokemon = new Pokemon($request->all());
        try {
            $pokemon = Pokemon::create($request->all());
            return redirect('pokemon')->with(['message' => 'Pokemon creado correctamente.']);
        } catch(\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'Error al crear el Pokémon.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $pokemon = Pokemon::find($id);
        if($pokemon === null){
            abort(404);
        }
        return view('pokemon.show', ['lipokemon' => 'active', 'pokemon' => $pokemon]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Pokemon $pokemon)
    {
        return view('pokemon.edit', ['lipokemon' => 'active', 'pokemon' => $pokemon]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pokemon $pokemon){
        $validated = $request->validate([
            'nombre'  => 'required|max:50|min:3',
            'peso'    => 'required|numeric|gte:0|lte:900',
            'altura'  => 'required|numeric|gte:0|lte:100',
            'tipo'    => 'required|in:Agua,Fuego,Planta,AGUA,FUEGO,PLANTA,agua,fuego,planta',
            'nivel'  => 'required|numeric|gte:1|lte:100',
            'evolucion' => 'required|numeric|gte:1|lte:3',
        ]);
        try {
            $result = $pokemon->update($request->all());
            return redirect('pokemon')->with(['message' => 'Pokémon actualizado correctamente.']);
        } catch(\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'Error al actualizar el Pokémon.']);  
        }
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy(Request $request, Pokemon $pokemon){
        try {
        $pokemon->delete();
        return redirect('pokemon')->with(['message' => 'Pokémon eliminado correctamente.']);
        } catch (\Exception $e) {
        return back()->withErrors(['message' => 'Error al eliminar el Pokémon.']);
        }
    }


    
}