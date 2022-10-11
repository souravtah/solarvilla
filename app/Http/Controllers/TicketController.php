<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\TicketCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCallRequest;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;

class TicketController extends Controller
{

    public function index()
    {
        $tickets                    = Ticket::where('user_id', Auth::id())->opened()->latest()->paginate(3);
        return view('tickets.index', compact('tickets'));
    }


    public function create()
    {
        $ticket_categories          = TicketCategory::visible()->get();
        return view('tickets.create', compact('ticket_categories'));
    }


    public function store(StoreTicketRequest $request)
    {
        $validated                  = $request->safe()
                                        ->only(['title', 'message', 'ticketPriority', 'category', 'due_date']);
        $ticket                     = new Ticket;
        $ticket->user_id            = Auth::id();
        $ticket->title              = $validated['title'];
        $ticket->message            = $validated['message'];
        $ticket->priority           = $validated['ticketPriority'];
        if (isset($validated['due_date']))
        $ticket->due_date           = Carbon::createFromFormat("F j, Y", $validated['due_date'])->format('Y-m-d');
        $ticket->save();
        $ticket->attachCategories($validated['category']);
        return redirect()->route('tickets.show', ['ticket' => $ticket->id])
                    ->with('status', 'Ticket created!');
    }


    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        //
    }


    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }


    public function destroy(Ticket $ticket)
    {
        //
    }

    public function store_call_request(StoreCallRequest $request)
    {

        $validated                  = $request->safe()->only(['category', 'due_date']);
        $ticket                     = new Ticket;
        $ticket->user_id            = Auth::id();
        $ticket->title              = 'Call Request';
        $ticket->message            = 'Call requested';
        $ticket->priority           = 'critical';
        if (isset($validated['due_date']))
        $ticket->due_date           = Carbon::createFromFormat("Y-m-d H:i", $validated['due_date'])->format('Y-m-d H:i');
        $ticket->save();
        $ticket->attachCategories($validated['category']);
        return redirect()->route('tickets.show', ['ticket' => $ticket->id])
                    ->with('status', 'Call requested!');
    }
}
