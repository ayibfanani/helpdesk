<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    public function index()
    {
    	$data = [
            'title' => 'Knowledge Base',
            'sidebar' => 'kbase'
        ];

        return view('contents.knowledges.index', $data);
    }

    public function posts($category = null)
    {
    	$data = [
            'title' => 'All Posts',
            'sidebar' => 'kbase'
        ];

        return view('contents.knowledges.posts.index', $data);	
    }
}
