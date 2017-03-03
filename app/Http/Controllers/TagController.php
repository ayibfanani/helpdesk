<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Tags',
            'sidebar' => 'tag'
        ];
        
        return view('contents.taxonomies.tags.index', $data);
    }
}
