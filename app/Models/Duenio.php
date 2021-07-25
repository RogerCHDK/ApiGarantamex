<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duenio extends Model
{
    use HasFactory;
    protected $table= 'duenios'; 
    protected $fillable = ['nombre','apellido_paterno','apellido_materno',
                            'email','telefono','password',
                            'rfc','tipo_usuario_id','status'];
}
