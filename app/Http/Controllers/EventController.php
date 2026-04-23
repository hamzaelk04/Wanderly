<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Image;
use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::has('user')->with('user')->paginate(5)->withQueryString();
        $statistics = Event::all();

        return view('dashboard-views.admin.manage-events', compact('events', 'statistics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'duration' => 'required|integer',
            'images.*' => 'image|max:10240',
            'capacity' => 'nullable|integer|min:10',

            'ticket' => 'nullable|array',

            'ticket.*.name' => 'required_with:ticket|string',
            'ticket.*.price' => 'required_with:ticket|numeric',
            'ticket.*.quantity' => 'required_with:ticket|integer|min:10',
        ]);

        $tickets = collect($request->input('ticket', []))
            ->filter(function ($ticket) {
                return !empty($ticket['quantity']);
            });

        if ($tickets->isNotEmpty()) {
            $capacity = $tickets->sum('quantity');
        } else {
            $capacity = $request->capacity;
        }

        DB::beginTransaction();

        try {
            $event = Event::create([
                'title' => $request->title,
                'city' => $request->city,
                'address' => $request->address,
                'description' => $request->description,
                'date' => $request->date,
                'status' => 'pending',
                'duration' => $request->duration,
                'capacity' => $capacity,
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('events', 'public');

                    $event->images()->create([
                        'path' => $path
                    ]);
                }
            }

            if ($request->filled('ticket')) {
                foreach ($request->ticket as $ticket) {
                    Ticket::create([
                        'event_id' => $event->id,
                        'name' => $ticket['name'],
                        'price' => $ticket['price'],
                        'quantity' => $ticket['quantity'],
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('dashboard.organizer');
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event = Event::with('tickets')->findOrFail($id);

        $request->validate([
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:accepted,rejected',

            'ticket' => 'nullable|array',

            'ticket.*.price' => 'required_with:ticket|numeric',
            'ticket.*.percent' => ['numeric', 'min:0', 'max:100'],
        ]);

        $event->categories()->attach($request->category_id);

        $event->update([
            'status' => $request->status,
        ]);

        foreach ($request->tickets ?? [] as $ticketData) {

            $ticket = $event->tickets()->find($ticketData['id']);

            if (!$ticket)
                continue;

            $percent = $ticketData['percent'] ?? 0;

            $ticket->update([
                'service_fee' => $percent,
            ]);
        }

        return redirect()->to('/admin/manage/events');
    }

    public function updateStatus(Request $request, string $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ]);

        $event->update([
            'status' => $request->status,
        ]);

        return redirect()->to('/admin/manage/events');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function review(Event $event)
    {
        $categories = Category::all();
        $event->load(['images', 'tickets']);
        return view('dashboard-views.admin.event-review', compact('event', 'categories'));
    }
}
