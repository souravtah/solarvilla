<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Ticket;
use App\Models\TicketCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreQuoteRequest;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $this->middleware('auth');
        $ticket_categories          = TicketCategory::visible()->get();
        $opened_tickets             = Ticket::where('title', '!=', 'Call Request')
                                            ->where('user_id', Auth::id())
                                            ->opened()->count();
        $opened_calls               = Ticket::where('title', '=', 'Call Request')
                                            ->where('user_id', Auth::id())
                                            ->opened()->count();

        return view('users.home', compact('ticket_categories', 'opened_tickets', 'opened_calls'));
    }

    public function get_help()
    {
        return view('users.client.get-help');
    }

    public function get_ticket_id()
    {
        return view('guests.get-ticket-status');
    }

    public function store_quote_request(StoreQuoteRequest $request)
    {
        $validated                  = $request->safe()->only(['name', 'mobile', 'email', 'avg_monthly_bill', 'power_consumption']);
        $ticket                     = new Ticket;
        $ticket->user_id            = 7;
        $ticket->title              = 'Quote Request';
        $ticket->message            = 'Quote requested. Name: ' . $validated['name'] . ' Mobile: ' . $validated['mobile'] . ' Avg Monthly Bill: ' . $validated['avg_monthly_bill'] . ' Power Consumption: ' . $validated['power_consumption'] ;
        $ticket->priority           = 'critical';
        $ticket->due_date           = Carbon::now()->addDays(7)->format('Y-m-d');
        $ticket->save();
        $ticket->attachCategories(5);
        $ticket->attachLabels(1);
        return redirect()->route('index_page')
                    //->with('ticket_id', $ticket->id)
                    ->with('status', 'We are working on your quote.')
                    ->with('sub_status', 'We will email it to you within 7 days.');
    }
}
