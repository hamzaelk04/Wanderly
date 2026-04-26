<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $client = User::whereHas('role', function ($query) {
            $query->where('name', 'client');
        })->count();

        $organizer = User::whereHas('role', function ($query) {
            $query->where('name', 'organizer');
        })->count();

        $admin = User::whereHas('role', function ($query) {
            $query->where('name', 'admin');
        })->count();

        $count = [
            'admins' => $admin,
            'organizers' => $organizer,
            'clients' => $client,
        ];

        $totalTicketsSold = $this->getTotalTicketsSold();
        $totalRevenue = $this->getTotalRevenue();
        $netProfit = $this->getNetProfit();

        return view('dashboard.admin', compact('count', 'totalTicketsSold', 'totalRevenue', 'netProfit'));
    }

    public function getTotalTicketsSold()
    {
        $totalTicketsSold = \DB::table('order_items')
            ->sum('quantity');

        return $totalTicketsSold;
    }

    public function getTotalRevenue()
    {
        $totalRevenue = \DB::table('orders')
            ->sum('total_amount');

        return $totalRevenue;
    }

    public function getNetProfit()
    {
        $totalTicketPrice = \DB::table('order_items')
            ->join('tickets', 'order_items.ticket_id', '=', 'tickets.id')
            ->sum(\DB::raw('order_items.quantity * tickets.price'));

        $totalRevenue = \DB::table('orders')
            ->sum('total_amount');

        $netProfit = $totalRevenue - $totalTicketPrice;

        return $netProfit;
    }
}
