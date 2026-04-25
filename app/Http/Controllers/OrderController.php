<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function download(Order $order)
    {
        $pdf = \PDF::loadView('tickets.pdf', ['order' => $order]);
        return $pdf->download('tickets-' . $order->id . '.pdf');
    }

}
