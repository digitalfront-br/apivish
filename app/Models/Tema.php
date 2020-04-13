<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    // public $timestamps = false;
    public function entidades()
    {
        return $this->hasMany(Entidade::class);
    }
}
