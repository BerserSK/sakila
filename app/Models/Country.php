<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Country extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "country";
    //La clave primaria de la tabla
    protected $primaryKey="country_id";
    //anular campos de auditoria
    public $timestamps = false;
    //Aditamento llenar la base de datos con campos de ejemplos (Faker)
    use HasFactory;

    //Relacion entre Country y City
    public function inventarios(){
        return $this->hasMany(City::class, 'country_id');
    }
}