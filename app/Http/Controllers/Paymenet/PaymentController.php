<?php

namespace App\Http\Controllers\Paymenet;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Ticket;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Illuminate\Support\Facades\DB;


class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $ticketsInput = $request->tickets;

        $lineItems = [];
        $orderItemsData = [];
        $totalAmount = 0;


        foreach ($ticketsInput as $ticketId => $quantity) {
            if ($quantity <= 0)
                continue;

            $ticket = Ticket::findOrFail($ticketId);

            if ($quantity > $ticket->quantity) {
                return back()->with('error', "Not enough tickets for {$ticket->name}");
            }

            $price = $ticket->price + ($ticket->price * $ticket->service_fee / 100);

            $totalAmount += $price * $quantity;

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

            $orderItemsData[] = [
                'ticket_id' => $ticket->id,
                'quantity' => $quantity,
                'price' => $price,
            ];
        }

        if (empty($lineItems)) {
            return back()->with('error', 'Please select at least one ticket');
        }

        DB::beginTransaction();

        try {
            $order = Order::create([
                'user_id' => auth()->id(),
                'total_amount' => $totalAmount,
                'status' => 'pending'
            ]);

            foreach ($orderItemsData as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'ticket_id' => $item['ticket_id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);
            }

            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => $lineItems,
                'mode' => 'payment',

                'metadata' => [
                    'order_id' => $order->id,
                ],

                'success_url' => url('/success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => url('/cancel'),
            ]);

            $order->update([
                'stripe_session_id' => $session->id,
            ]);

            DB::commit();

            return redirect($session->url);

        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Payment initialization failed');
        }

    }
}
