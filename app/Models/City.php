<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class City extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "city";
    //La clave primaria de la tabla
    protected $primaryKey="city_id";
    //anular campos de auditoria
    public $timestamps = false;
    //Aditamento llenar la base de datos con campos de ejemplos (Faker)
    use HasFactory;
}