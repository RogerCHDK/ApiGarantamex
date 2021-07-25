<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table= 'empleados'; 
    protected $fillable = ['nombre','apellido_paterno','apellido_materno',
                            'email','telefono','password',
                            'hora_entrada','hora_salida',
                            'tipo_usuario_id','sucursal_id','status'];
}
