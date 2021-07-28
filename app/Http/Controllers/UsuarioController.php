<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioPostRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        return response()->json([
            'usuario'=> $usuario
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioPostRequest $request)
    {
        $request->validated();

        $usuario = Usuario::create([
            'nombre' => $request->nombre ,
            'apellido_paterno' => $request->apellido_paterno ,
            'apellido_materno' => $request->apellido_materno ,
            'email' => $request->email ,
            'telefono' => $request->telefono ,
            'password' =>  Hash::make($request->password),
            'ciudad' => $request->ciudad ,
            'estado' => $request->estado ,
            'calle' => $request->calle ,
            'codigo_postal' => $request->codigo_postal ,
            'numero_interior' => $request->numero_interior ,
            'numero_exterior' => $request->numero_exterior ,
            'tipo_usuario_id' => 1 ,
            'status' => 1 ,
        ]);

        return response()->json([
            'message' => 'Ok'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return response()->json([
            'usuario' => $usuario
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        
        return response()->json([
            'message' => "Usuario actualizado correctamente"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json(null, 204);
    }
}
