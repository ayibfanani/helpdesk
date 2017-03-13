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

    public function posts($id)
    {
    	$data = [
            'title' => 'Knowledge Base',
            'sidebar' => 'kbase'
        ];

        return view('contents.knowledges.posts.index', $data);  
    }

    public function createPost($id)
    {
        $data = [
            'title' => 'Create a Post',
            'sidebar' => 'kbase',
            'action_url' => '',
            'method' => 'POST',
        ];

        return view('contents.knowledges.posts.create', $data);  
    }

    public function editPost($id, $post_id)
    {
        // Get Post
        $data = [
            'title' => 'Edit a Post',
            'sidebar' => 'kbase',
            'action_url' => '',
            'method' => 'PUT',
        ];

        return view('contents.knowledges.posts.edit', $data);  
    }
}
