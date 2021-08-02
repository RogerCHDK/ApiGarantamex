<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'nombre_completo' => $this->nombre_completo,
            'nombre' => $this->nombre,
            'apellido_paterno' => $this->apellido_paterno ,
            'apellido_materno' => $this->apellido_materno ,
            'email' => $this->email ,
            'telefono' => $this->telefono ,
            'ciudad' => $this->ciudad ,
            'estado' => $this->estado ,
            'calle' => $this->calle ,
            'codigo_postal' => $this->codigo_postal ,
            'numero_interior' => $this->numero_interior ,
            'numero_exterior' => $this->numero_exterior 
        ];
    }
}
