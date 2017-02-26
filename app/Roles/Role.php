<?php

namespace App\Roles;

use Illuminate\Database\Eloquent\Model;
use \App\Users\User;

class Role extends Model
{
    protected $fillable = [
        'name', 'title', 'level'
    ];

    public function users() {
        return $this->morphToMany(User::class, 'userable');
    }
}
