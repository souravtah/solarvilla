<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\TicketCategory;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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
}
