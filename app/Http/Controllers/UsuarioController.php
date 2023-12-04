<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios=Usuario::all();
        return view("usuarios.index",compact("usuarios"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("usuarios.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario= new Usuario();
        $usuario->nombre=$request->;
        $usuario->apellido=$request->;
        $usuario->telefono=$request->;
        $usuario->id_rol=$request->;
        $usuario.save()
        return redirect()->route("usuarios.index")


    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        $usuario=Usuario::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario=find($id)
        $usuario->nombre=$request->;
        $usuario->apellido=$request->;
        $usuario->telefono=$request->;
        $usuario->id_rol=$request->;
        $usuario.save()
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario=Usuario::find($id)
        $usuario->delete();
        return redirect()->route("usuarios.index")
    }
}
