<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Address extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "address";
    //La clave primaria de la tabla
    protected $primaryKey="address_id";
    //anular campos de auditoria
    public $timestamps = false;
    //Aditamento llenar la base de datos con campos de ejemplos (Faker)
    use HasFactory;

}