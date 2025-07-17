<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "author_name",
        "post_title",
        "post_description"
    ];
}
