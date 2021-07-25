<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table= 'usuarios'; 
    protected $fillable = ['nombre','apellido_paterno','apellido_materno',
                            'email','telefono','password',
                            'ciudad','estado','calle','codigo_postal',
                        'numero_interior','numero_exterior','tipo_usuario_id','status'];
}
