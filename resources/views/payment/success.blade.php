@extends('layouts.app')

@section('content')
    <section class="grow flex flex-col items-center justify-start px-4 py-12 md:py-20">
        <div class="text-center mb-12">
            <div
                class="inline-flex items-center justify-center w-20 h-20 bg-tertiary-container text-on-tertiary-container rounded-full mb-6">
                <span class="material-symbols-outlined text-4xl"
                    style="font-variation-settings: 'wght' 700;">check_circle</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-on-surface mb-4">Payment Successful</h1>
            <p class="text-on-surface-variant text-lg max-w-md mx-auto">Your adventure is confirmed! A confirmation
                email has been sent to your inbox.</p>
        </div>
        <!-- Bento Grid Layout for Summary and Details -->
        <div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Order Summary Card -->
            <div
                class="md:col-span-5 bg-surface-container-lowest p-8 rounded-xl shadow-[0_4px_20px_0_rgba(0,0,0,0.03)] flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-start mb-8">
                        <div>
                            <p class="text-sm font-medium text-on-surface-variant mb-1 uppercase tracking-wider">Order
                                ID</p>
                            <h2 class="text-xl font-bold">{{ $order->id }}</h2>
                        </div>
                        <span
                            class="bg-tertiary-container/20 text-tertiary px-3 py-1 rounded-sm text-xs font-bold uppercase tracking-widest">{{ ucfirst($order->status) }}</span>
                    </div>
                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between items-center py-2">
                            <span class="text-on-surface-variant">Payment Method</span>
                            <span class="font-medium">•••• 4242</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-on-surface-variant">Date</span>
                            <span class="font-medium">{{ $order->updated_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                </div>
                <div class="pt-6 border-t border-surface-variant">
                    <div class="flex justify-between items-end">
                        <p class="text-sm font-medium text-on-surface-variant uppercase tracking-wider">Total Amount</p>
                        <p class="text-3xl font-extrabold text-primary">{{ number_format($order->total_amount, 2) }} MAD</p>
                    </div>
                </div>
            </div>
            <!-- Tickets Breakdown Card -->
            <div class="md:col-span-7 bg-surface-container-lowest p-8 rounded-xl shadow-[0_4px_20px_0_rgba(0,0,0,0.03)]">
                <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">confirmation_number</span>
                    Tickets Breakdown
                </h3>
                <div class="overflow-hidden">
                    <table class="w-full text-left">
                        <thead>
                            <tr
                                class="text-xs font-bold text-on-surface-variant uppercase tracking-widest border-b border-surface-variant">
                                <th class="pb-4 font-bold">Item</th>
                                <th class="pb-4 text-center font-bold">Qty</th>
                                <th class="pb-4 text-right font-bold">Price</th>
                                <th class="pb-4 text-right font-bold">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            @foreach($orderItems as $item)
                                <tr class="border-b border-surface-variant/50">
                                    <td class="py-5 font-semibold text-on-surface">{{ $item->ticket->name }}</td>
                                    <td class="py-5 text-center">{{ $item->quantity }}</td>
                                    <td class="py-5 text-right text-on-surface-variant">
                                        {{ number_format($item->price, 2) }} MAD
                                    </td>
                                    <td class="py-5 text-right font-semibold">
                                        {{ number_format($item->price * $item->quantity, 2) }} MAD
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-8 relative rounded-lg overflow-hidden h-32 group">
                    <img alt="Destination preview"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Stunning aerial view of a turquoise alpine lake surrounded by jagged snow-capped peaks at sunrise"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxavaxE5pf356uaAascUMpQa1Fse37AnuWBDSnM6tuoOIbCcZiz65tAZP4fMokpSRwTcno1iYeEVTKKktwQIFRNdA0f8UgwCGvbYNFvI2y7naSFalZYU8bKtb8AZsnu3SfIsmvQED97q9GTc0WnNSIPSOtmbUUZO93sGQlUmTfkKrNBWsIILrojxMn6bNDDNmQdB9wrRyGVLdlgj4wcpalCmaaNpUDDCd6rNmVR7wqjzKGR-ZLmX4UGkMxGiq4GDHKDTIlAbSlHts" />
                    <div class="absolute inset-0 bg-linear-to-t from-black/60 to-transparent flex items-end p-4">
                        <p class="text-white text-sm font-medium">Next stop: Blue Alpine Valley Tour</p>
                    </div>
                </div>
            </div>
            <!-- Primary Action -->
            <div class="md:col-span-12 flex flex-col items-center mt-6">
                <button
                    class="w-full cursor-pointer md:w-auto px-12 py-4 bg-linear-to-br from-primary to-primary-container text-on-primary font-bold rounded-full text-lg shadow-lg hover:shadow-xl transition-all duration-300 active:scale-95 flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">download</span>
                    Download Tickets
                </button>
                <div class="flex flex-wrap justify-center gap-8 mt-8">
                    <a class="text-primary font-semibold hover:underline flex items-center gap-1 group" href="#">
                        <span
                            class="material-symbols-outlined text-lg group-hover:-translate-x-1 transition-transform">arrow_back</span>
                        Back to Events
                    </a>
                    <a class="text-primary font-semibold hover:underline flex items-center gap-1 group" href="#">
                        View My Orders
                        <span
                            class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection