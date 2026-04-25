<?php

namespace App\Http\Controllers\Paymenet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Webhook;
use App\Models\Order;
use App\Models\Ticket;

class StripeWebhookController extends Controller
{
    public function handleWebhook(Request $request)
    {
        \Log::info('Stripe webhook hit');
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $secret = config('services.stripe.webhook_secret');

        $event = Webhook::constructEvent($payload, $sigHeader, $secret);

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;

            $orderId = $session->metadata->order_id;

            $order = Order::find($orderId);

            if ($order) {
                $order->update([
                    'status' => 'paid',
                ]);

                foreach ($order->items as $item) {
                    $ticket = Ticket::find($item->ticket_id);
                    $ticket->decrement('quantity', $item->quantity);
                }
            }
        }

        return response()->json(['status' => 'success']);
    }
}
