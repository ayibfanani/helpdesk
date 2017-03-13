<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Teams',
            'sidebar' => 'team'
        ];

        return view('contents.teams.index', $data);
    }
}
