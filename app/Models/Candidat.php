<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable = [
        "candidat_name",
        "candidat_email",
        "candidat_age",
        "candidat_phone",
        "school",
        "gender",
        "english_level",
        "campus",
        "terms"
    ];
}
