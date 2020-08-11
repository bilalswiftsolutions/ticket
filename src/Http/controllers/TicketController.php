<?php

namespace Coldxpress\Ticket\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('ticket::test');
    }
}
