<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectoaapadrinado extends Model
{
    public $timestamps = false;
    //protected $primaryKey = 'id';

    public function scopeId($query, $id)
    {
        if($id)
            return $query->where('id', 'LIKE', "%$id%");
    }
}