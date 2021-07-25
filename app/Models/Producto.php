<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table= 'productos'; 
    protected $fillable = ['nombre','marca','modelo','precio',
                            'stock','extension_garantia','dias_garantia','status'];
}
