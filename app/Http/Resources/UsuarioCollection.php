<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UsuarioCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organizacion' => 'Garantemex',
                'authors' => [
                    'Rogelio Perez',
                ],
            ],
            'type' => 'aplicacion_web',
        ];
    }
}
