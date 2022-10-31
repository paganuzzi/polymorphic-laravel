<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    use HasFactory;



    public function ocupation()
    {
        return $this->morphOne(Ocupation::class, 'rol');
    }
}
