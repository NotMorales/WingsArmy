<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checador extends Model
{
    protected $table = 'checador';
    protected $primaryKey = 'checadorId';

    //Relacion Muchos a Uno
    public function mesero(){
        return $this->belongsTo('App\mesero', 'meseroId', 'meseroId');
    }
}
