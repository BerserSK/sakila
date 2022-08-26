<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Film extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "film";
    //La clave primaria de la tabla
    protected $primaryKey="film_id";
    //anular campos de auditoria
    public $timestamps = false;
    //Aditamento llenar la base de datos con campos de ejemplos (Faker)
    use HasFactory;

    //Relacion entre Film y Inventory
    public function inventarios(){
        return $this->hasMany(Inventory::class, 'film_id');
    }

     //Relacion M:M entre film y Category
    public function categorias (){
        //belongsToMany: parametros
        //1 El modelo a relacionar
        //2 la tabla de pivot
        //3 la FK del modelo en el pivot
        //4 la FK del modelo la relacionar en el pivot 
        return $this->belongsToMany(Category::class,
            'film_category',
            'film_id ',
            'category_id'
        )->withPivot('last_update');
    }

    public function actores(){
        return $this->belongsToMany(Actor::class,
            'film_actor',
            'actor_id',
            'film_id'
        )->withPivot('last_update');
    }
}