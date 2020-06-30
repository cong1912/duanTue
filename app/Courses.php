<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Courses extends Model
{

    protected $fillable = [
        'name','content','slug',
    ];
    public function path(){
        return url("khoahoc/".Str::slug($this->slug));
    }
}
