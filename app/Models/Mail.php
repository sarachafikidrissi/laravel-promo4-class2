<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    //
    protected $fillable = [
        "name",
        "email",
        "phone",
        "email_priority",
        "message",
        "is_read"
    ];
}
