<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $fillable = ["nombre", "email", "telefono", "", "nombre_mascota", "raza", "clase_mascota", "fecha_cita", "hora_cita"];
}
