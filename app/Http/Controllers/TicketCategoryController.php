<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\TicketCategory;
use App\Http\Requests\StoreTicketCategoryRequest;

class TicketCategoryController extends Controller
{
    public function index()
    {
        $ticket_categories                      = TicketCategory::paginate(3);
        $total_ticket_categories                = $ticket_categories->toArray()['total'];
        return view('tickets.index', compact('ticket_categories', 'total_ticket_categories'));
    }

    public function store(StoreTicketCategoryRequest $request)
    {
        $validated                  = $request->safe()
                                        ->only(['name', 'is_visible']);
        $validated['slug']          = Str::slug($validated['name'], '-');
        $ticket_category            = TicketCategory::create($validated);
        return redirect()->route('ticket-categories.index')
                    ->with('status', 'Ticket '. $ticket_category->name .' created!');
    }

    public function update(StoreTicketCategoryRequest $request, TicketCategory $ticket_category)
    {
        $validated                  = $request->safe()->only(['name', 'is_visible']);
        $validated['slug']          = Str::slug($validated['name'], '-');
        $ticket_category->name       = $validated['name'];
        $ticket_category->slug       = $validated['slug'];
        $ticket_category->is_visible = $validated['is_visible'];
        $ticket_category->save();
        return redirect()->route('ticket-categories.index')
                    ->with('status', 'Ticket '. $ticket_category->name .' updated!');
    }

    public function destroy(TicketCategory $ticket_category)
    {
        $ticket_category->delete();
        return redirect(route('ticket-categories.index'))
                ->with('status', 'Ticket category '. $ticket_category->name .' deleted!');
    }
}
