<?php

namespace App\Http\Controllers;

// use App\Models\Ticket;
use Illuminate\Support\Str;
use App\Models\TicketCategory;
use App\Http\Requests\StoreTicketCategoryRequest;
use App\Http\Requests\UpdateTicketCategoryRequest;

class TicketCategoryController extends Controller
{

    public function index()
    {
        $ticket_categories                      = TicketCategory::paginate(3);
        $total_ticket_categories                = $ticket_categories->toArray()['total'];
        return view('tickets.index', compact('ticket_categories', 'total_ticket_categories'));
    }

    // public function create()
    // {
    //     //
    // }

    public function store(StoreTicketCategoryRequest $request)
    {
        $validated                  = $request->safe()
                                        ->only(['name', 'is_visible']);
        $validated['slug']          = Str::slug($validated['name'], '-');
        $ticket_category            = TicketCategory::create($validated);
        return redirect()->route('ticket-categories.index')
                    ->with('status', 'Ticket '. $ticket_category->name .' created!');
    }

    public function show(TicketCategory $ticketCategory)
    {
        //
    }


    public function edit(TicketCategory $ticketCategory)
    {
        //
    }


    public function update(UpdateTicketCategoryRequest $request, TicketCategory $ticketCategory)
    {
        //
    }


    public function destroy(TicketCategory $ticketCategory)
    {
        $ticketCategory->delete();
        return redirect(route('ticket-categories.index'))
                ->with('status', 'Ticket category '. $ticketCategory->name .' deleted!');
    }
}
