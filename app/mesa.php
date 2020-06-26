<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesa extends Model
{
    protected $table = 'mesa';
    protected $primaryKey = 'mesaId';

    //Relacion Uno a Mucho
    public function asignacion(){
        return $this->hasMany('App\asignacion', 'mesaId', 'mesaId');
    }
}
