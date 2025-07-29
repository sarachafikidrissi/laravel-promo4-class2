<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
     protected $fillable = [
        'name',
        'author_id',
        'category_id',
        'cover',
    ];


    public function author(){
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
