<?php

namespace App\Taxonomies;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'site_id', 'name', 'slug', 'categorizable_id', 'categorizable_type'
    ];
}
