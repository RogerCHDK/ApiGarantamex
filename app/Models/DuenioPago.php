<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuenioPago extends Model
{
    use HasFactory;
    protected $table= 'duenio_pagos'; 
    protected $fillable = ['fecha_inicio','meses','catalogo_pago_id',
                            'duenio_id','status'];
}
