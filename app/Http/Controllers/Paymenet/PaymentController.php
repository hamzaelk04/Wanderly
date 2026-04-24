<?php

namespace App\Http\Controllers\Paymenet;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;


class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $ticketsInput = $request->tickets;

        $lineItems = [];

        foreach ($ticketsInput as $ticketId => $quantity) {
            if ($quantity <= 0)
                continue;

            $ticket = Ticket::findOrFail($ticketId);

            if ($quantity > $ticket->quantity) {
                return back()->with('error', "Not enough tickets for {$ticket->name}");
            }

            $price = $ticket->price + ($ticket->price * $ticket->service_fee / 100);


            $lineItems[] = [
                'price_data' => [
                    'currency' => 'mad',
                    'product_data' => [
                        'name' => $ticket->name,
                    ],
                    'unit_amount' => $price * 100,
                ],
                'quantity' => $quantity,
            ];
        }

        if (empty($lineItems)) {
            return back()->with('error', 'Please select at least one ticket');
        }

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',

            'success_url' => url('/success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => url('/cancel'),
        ]);

        return redirect($session->url);
    }
}
