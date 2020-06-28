<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignacion extends Model
{
    protected $fillable = ['asignacionId', 'meseroId', 'mesaId', 'fecha', 'total', 'final', 'created_at', 'updated_at'];
    protected $table = 'asignacion';
    protected $primaryKey = 'asignacionId';

    //Relacion Muchos a Uno
    public function mesa(){
        return $this->belongsTo('App\mesa', 'mesaId', 'mesaId');
    }

    //Relacion Muchos a Uno
    public function mesero(){
        return $this->belongsTo('App\mesero', 'meseroId', 'meseroId');
    }
}
