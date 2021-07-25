<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $table= 'sucursales'; 
    protected $fillable = ['nombre','telefono','correo',
                            'ciudad','estado','tienda_id','status'];
}
