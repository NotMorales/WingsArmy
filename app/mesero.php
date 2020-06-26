<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesero extends Model
{
    protected $fillable = ['meseroId', 'nombre', 'telefono', 'correo', 'direccion', 'created_at', 'updated_at'];
    protected $table = 'mesero';
    protected $primaryKey = 'meseroId';

    //Relacion Uno a Mucho
    public function asignacion(){
        return $this->hasMany('App\asignacion', 'mesaId', 'mesaId');
    }

    //Relacion Uno a Mucho
    public function checador(){
        return $this->hasMany('App\checador', 'mesaId', 'mesaId');
    }

    //Relacion Uno a Mucho
    public function cola(){
        return $this->hasMany('App\cola', 'mesaId', 'mesaId');
    }
}
