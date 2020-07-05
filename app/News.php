<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'title', 'image', 'content','category','tomtat','slug',
    ];
    public function path(){
        return url("tintuc/".Str::slug($this->slug));
    }
}
