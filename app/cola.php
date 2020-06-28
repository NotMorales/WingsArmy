<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cola extends Model
{
    protected $fillable = ['colaId', 'meseroId', 'posicion', 'contador', 'created_at', 'updated_at'];
    protected $table = 'cola';
    protected $primaryKey = 'colaId';

    //Relacion Muchos a Uno
    public function mesero(){
        return $this->belongsTo('App\mesero', 'meseroId', 'meseroId');
    }
}
