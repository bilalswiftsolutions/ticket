<?php

namespace Coldxpress\Ticket\Http\Controllers;

use App\Http\Controllers\Controller;

use Coldxpress\Ticket\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{

    public function index()
    {
        $tickets = Ticket::select('id')->get();
        return view('ticket::pages.index', compact('tickets'));
    }

    public function store(Request $request)
    {
        try {
            $request['requester_id'] = Auth::user()->id;
            Ticket::create($request->all());
            return back()->with('success', 'Ticket Created Successfully');
        } catch (\Exception $exception) {
            return back();
        }
    }

    public function filteredTickets($filter)
    {
        if ($filter == "unsolved") {
            $tickets = Ticket::where('status', 0)->orderBy('created_at','desc')->get();
        }
        if ($filter == "solved") {
            $tickets = Ticket::where('status', 1)->orderBy('created_at','desc')->get();
        }
        if ($filter == "unassigned") {
          $tickets =  Ticket::whereDoesntHave('ticket_assigned_agents')->orderBy('created_at','desc')->get();
        }
        if ($filter == "assigned") {
            $tickets =  Ticket::has('ticket_assigned_agents')->orderBy('created_at','desc')->get();
        }
        return response()->json($tickets);
    }
}
