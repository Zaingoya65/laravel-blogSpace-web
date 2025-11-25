<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'img_url',
        'category',
        'title',
        'blog_body'
    ];
}
