<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Categories',
            'sidebar' => 'category'
        ];
        
        return view('contents.taxonomies.categories.index', $data);
    }
}
