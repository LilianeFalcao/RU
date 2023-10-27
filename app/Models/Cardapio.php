<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    use HasFactory;

     protected $fillable = ['prato_principal', 'vegetariana ', 'vegana', 'guarnicao', 'arroz', 'feijao ', 'salada1', 'salada2', 'salada3', 'salada4', 'sobremesa', 'data'];

}
