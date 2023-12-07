<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animais = Animal::all();
        return view('animal-listagem', ['animais' => $animais]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animal-cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $animal = Animal::create($dados);
        return redirect()->route('animal.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $animal = Animal::find($id);

        if($animal){
            return view('animal-detalhes', ['animal' => $animal]);
        }else{
            return redirect()->route('animal.index');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $animal = Animal::find($id);
        return view('animal-edicao', ['animal' => $animal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $animal = Animal::find($request->id);
        $animal->update($request->all());

        return redirect()->route('animal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $animal = Animal::find($id);
            $animal->delete();
            
            return redirect()->route('animal.index');
    }
}
