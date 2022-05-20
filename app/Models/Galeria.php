<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
    protected $table = 'galerias';
    public $timestamps = false;
    protected $fillable = ['nombre', 'dpi', 'apellido', 'telefono', 'correo', 'participante', 'grupo', 'image', 'video', 'fecha_hora', 'estado'];
}
