<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class OrganizerController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();

        return view('dashboard.organizer', compact('events'));
    }
}
