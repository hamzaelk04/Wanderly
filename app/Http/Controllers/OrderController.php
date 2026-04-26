<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = auth()->user()
            ->orders()
            ->with([
                'orderItem.ticket.event.images',
            ])
            ->latest()
            ->get();

        $totalBookings = $orders->sum(function ($order) {
            return $order->orderItem->sum('quantity');
        });

        $activeTrips = $orders->where('status', 'active')->count();

        $countriesVisited = $orders->pluck('orderItem')
            ->flatten()
            ->pluck('ticket.event.city')
            ->unique()
            ->count();

        $lifetimeSpend = $orders->sum('total_amount');

        return view('dashboard.order-historic', compact(
            'orders',
            'totalBookings',
            'activeTrips',
            'countriesVisited',
            'lifetimeSpend'
        ));
    }
    public function download(Order $order)
    {
        $pdf = \PDF::loadView('tickets.pdf', ['order' => $order]);
        return $pdf->download('tickets-' . $order->id . '.pdf');
    }

}
