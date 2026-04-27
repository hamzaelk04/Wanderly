<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

class OrganizerController extends Controller
{
    public function index()
    {
        $organizer = auth()->user();

        $statistics = $organizer->events;

        $eventIds = $organizer->events()->pluck('id');
        $totalRevenue = DB::table('order_items')
            ->join('tickets', 'order_items.ticket_id', '=', 'tickets.id')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->whereIn('tickets.event_id', $eventIds)
            ->sum(DB::raw('order_items.price * order_items.quantity'));

        $totalTicketsSold = DB::table('order_items')
            ->join('tickets', 'order_items.ticket_id', '=', 'tickets.id')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->whereIn('tickets.event_id', $eventIds)
            ->where('orders.status', 'paid')
            ->sum('order_items.quantity');

        $totalRevenueWithoutFee = DB::table('order_items')
            ->join('tickets', 'order_items.ticket_id', '=', 'tickets.id')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->whereIn('tickets.event_id', $eventIds)
            ->where('orders.status', 'paid')
            ->sum(DB::raw(' (order_items.price / (1 + tickets.service_fee / 100)) * order_items.quantity'));

        $totalEvents = $organizer->events()->count();

        $acceptedEvents = $organizer->events()->where('status', 'accepted')->count();

        $avgRevenuePerEvent = $acceptedEvents > 0 ? $totalRevenue / $acceptedEvents : 0;

        $stats = [
            'totalRevenue' => $totalRevenue,
            'totalTicketsSold' => $totalTicketsSold,
            'avgRevenuePerEvent' => $avgRevenuePerEvent,
            'totalRevenueWithoutFee' => $totalRevenueWithoutFee,
        ];

        $events = $organizer->events()->latest()->limit(3)->get();

        return view('dashboard.organizer', compact('organizer', 'statistics', 'events', 'stats'));
    }


    public function updateEvent()
    {
        
    }
}
