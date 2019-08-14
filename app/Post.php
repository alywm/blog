<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //允许更新的字段
    protected $fillable = ['title','body','published_at','author_id'];
}
