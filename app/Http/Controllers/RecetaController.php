<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recetas=Receta::all();
        return view("recetas.index",compact("recetas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("recetas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $receta=new Receta();
        $receta->descripcion=$request->;
        $receta->proteina=$request->;
        $receta->carbohidratos=$request->;
        $receta->verduras=$request->;
        $receta.save();
        return redirect()->route("recetas.index")
    }

    /**
     * Display the specified resource.
     */
    public function show(Receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receta $receta)
    {
        $receta=Receta::find($id);
        return
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receta $receta)
    {
        $receta=find($id)
        $receta->descripcion=$request->;
        $receta->proteina=$request->;
        $receta->carbohidratos=$request->;
        $receta->verduras=$request->;
        $receta.save()
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receta $receta)
    {
        $receta=Receta::find($id)
        $receta->delete();
        return redirect()->route("recetas.index")

    }
}
