<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introduces extends Model
{
    protected $table = 'introduces';
    protected $fillable = [
        'content',
    ];
}
