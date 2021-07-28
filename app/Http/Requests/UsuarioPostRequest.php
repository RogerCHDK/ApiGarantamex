<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|alpha' ,
            'apellido_paterno' => 'required|regex:/^[\pL\s\-]+$/u' ,
            'apellido_materno' => 'required|regex:/^[\pL\s\-]+$/u' ,
            'email' => 'required|email|unique:App\Models\Usuario,email' ,
            'telefono' => 'nullable|size:10' ,
            'password' =>  'required|string|min:8',
            'ciudad' => 'required|regex:/^[\pL\s\-]+$/u' ,
            'estado' => 'required|regex:/^[\pL\s\-]+$/u' ,
            'calle' => 'nullable|regex:/^[\pL\s\-]+$/u' ,
            'codigo_postal' => 'nullable|numeric|digits:5' ,
            'numero_interior' => 'nullable|numeric|digits_between:1,3' ,
            'numero_exterior' =>'nullable|numeric|digits_between:1,3'
        ];
    }

    //Customizar los mensajes de error
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'apellido_paterno.required' => 'El apellido paterno es obligatorio',
        ];
    }

    // Customizar el nombre del campo cuando se muestra el error
    public function attributes()
    {
        // the direcion de correo has already taken
        return [
            'email' => 'dirección de correo',
            'password' => 'contraseña',
        ];
        
    }
}
