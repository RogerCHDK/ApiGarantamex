<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoPago extends Model
{
    use HasFactory;
    protected $table= 'catalogo_pagos'; 
    protected $fillable = ['precio','numero_cuentas','status'];
}
