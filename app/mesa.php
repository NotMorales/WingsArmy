<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesa extends Model
{
    protected $fillable = ['mesaId', 'nombre', 'descripcion', 'estado', 'created_at', 'updated_at'];
    protected $table = 'mesa';
    protected $primaryKey = 'mesaId';

    //Relacion Uno a Mucho
    public function asignacion(){
        return $this->hasMany('App\asignacion', 'mesaId', 'mesaId');
    }
}
