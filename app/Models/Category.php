<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "category";
    //La clave primaria de la tabla
    protected $primaryKey="category_id";
    //anular campos de auditoria
    public $timestamps = false;
    //Aditamento llenar la base de datos con campos de ejemplos (Faker)
    use HasFactory;

     //Relacion M:M entre Actor y Film
    public function filmaciones (){
        //belongsToMany: parametros
        //1 El modelo a relacionar
        //2 la tabla de pivot
        //3 la FK del modelo en el pivot
        //4 la FK del modelo la relacionar en el pivot 
        return $this->belongsToMany(Film::class,
            'film_category',
            'category_id',
            'film_id'
        )->withPivot('last_update');
    }
}
