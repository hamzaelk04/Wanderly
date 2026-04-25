<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tickets - Order #{{ $order->id }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 14px; color: #333; }
        h1 { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f5f5f5; }
        .summary { margin-top: 30px; }
        .summary p { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Payment Successful</h1>
    <p style="text-align:center;">Order Confirmation for Wanderly</p>

    <div class="summary">
        <p><strong>Order ID:</strong> #WND-{{ $order->id }}</p>
        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
        <p><strong>Date:</strong> {{ $order->updated_at->format('M d, Y') }}</p>
        <p><strong>Total Amount:</strong> {{ number_format($order->total_amount, 2) }} MAD</p>
    </div>

    <h2>Tickets Breakdown</h2>
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->orderItem as $item)
                <tr>
                    <td>{{ $item->ticket->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ number_format($item->price, 2) }} MAD</td>
                    <td>{{ number_format($item->price * $item->quantity, 2) }} MAD</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p style="margin-top:40px; text-align:center;">
        Thank you for booking with Wanderly. Please present this ticket at the event entrance.
    </p>
</body>
</html>
