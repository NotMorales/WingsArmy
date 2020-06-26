<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cola extends Model
{
    protected $table = 'cola';
    protected $primaryKey = 'colaId';

    //Relacion Muchos a Uno
    public function mesero(){
        return $this->belongsTo('App\mesero', 'meseroId', 'meseroId');
    }
}
