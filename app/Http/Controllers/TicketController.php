<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Tickets',
            'sidebar' => 'ticket'
        ];

        return view('contents.tickets.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'How fix this issue ?',
            'sidebar' => 'ticket'
        ];

        return view('contents.tickets.edit', $data);
    }
}
