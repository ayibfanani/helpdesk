<?php

namespace App\Users;

use Illuminate\Database\Eloquent\Model;

class Usermeta extends Model
{
    protected $fillable = [
        'key', 'value'
    ]
}
