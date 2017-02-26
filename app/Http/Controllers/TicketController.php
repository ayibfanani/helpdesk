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
}
