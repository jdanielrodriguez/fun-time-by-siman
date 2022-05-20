<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nombre', 'dpi', 'telefono', 'correo', 'participante', 'fechan', 'image', 'video', 'fecha_hora', 'estado'];
}
