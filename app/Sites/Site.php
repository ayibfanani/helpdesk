<?php

namespace App\Sites;

use Illuminate\Database\Eloquent\Model;
use \App\Users\User;
use \App\Settings\Setting;

class Site extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'status'
    ];

    public function settings() {
        return $this->hasMany(Setting::class);
    }

    public function users() {
        return $this->morphToMany(User::class, 'userable');
    }
}
