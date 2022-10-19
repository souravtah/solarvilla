<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Ticket;
use App\Models\TicketCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreCallRequest;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\TicketLabel;
use Symfony\Component\HttpFoundation\Response;

class TicketController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('view tickets list'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tickets                    = Ticket::where('user_id', Auth::id())->opened()->orderBy('due_date')->latest()->paginate(3);
        return view('tickets.index', compact('tickets'));
    }

    public function view_resolved_tickets()
    {
        abort_if(Gate::denies('view tickets list'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tickets                    = Ticket::where('user_id', Auth::id())->resolved()->orderBy('due_date')->latest()->paginate(3);
        return view('tickets.index', compact('tickets'));
    }

    public function view_all_pending_tickets()
    {
        abort_if(Gate::denies('view all tickets'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tickets                    = Ticket::query()->opened()->orderBy('due_date')->latest()->paginate(3);
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        abort_if(Gate::denies('create tickets'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ticket_categories          = TicketCategory::visible()->get();
        return view('tickets.create', compact('ticket_categories'));
    }

    public function store(StoreTicketRequest $request)
    {
        abort_if(Gate::denies('create tickets'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
        $ticket->attachLabels(1);
        return redirect()->route('tickets.show', ['ticket' => $ticket->id])
                    ->with('status', 'Ticket created!');
    }

    public function show(Ticket $ticket)
    {
        abort_if(Gate::denies('view each tickets'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$ticket->syncLabels([1,2,3]);

        foreach($ticket->labels as $label){ $current_ticket_labels[] = $label->id; }
        $ticket_status              = $ticket->labels[max($current_ticket_labels)-1]->name;
        $ticket_labels              = TicketLabel::pluck('id')->toArray();

        return view('tickets.show', compact('ticket', 'current_ticket_labels', 'ticket_labels', 'ticket_status'));
    }

    public function edit(Ticket $ticket)
    {
        //
    }

    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    // public function destroy(Ticket $ticket)
    // {
    //     //
    // }

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
        $ticket->attachLabels(1);
        return redirect()->route('tickets.show', ['ticket' => $ticket->id])
                    ->with('status', 'Call requested!');
    }

}
