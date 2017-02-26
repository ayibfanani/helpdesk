<?php

namespace App\Tickets;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'site_id', 'customer_id', 'staff_id', 'code', 'subject', 'content', 'status', 'priority', 'type', 'expired_at'
    ];

    protected $date = [
        'expired_at'
    ];
}
