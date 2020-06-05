<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Softwares extends Model
{
    protected $table = 'softwares';
    protected $fillable = [
        'name', 'image', 'content','link_android','link_ios',
    ];

}
