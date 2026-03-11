<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'age',
        'email',
        'brief_description',
        'photo'
    ];
}