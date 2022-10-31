<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasador extends Model
{
    use HasFactory;

    protected $fillable = ['address'];

    public function ocupation()
    {
        return $this->morphOne(Ocupation::class, 'rol');
    }
}
