<?php

namespace App\Taxonomies;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'site_id', 'name', 'slug'
    ];
}
