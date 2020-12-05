<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventParticipant;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return Inertia::render('Admin/Event/Index', ['events' => $events]);
    }

    public function publicIndex()
    {
        $events = Event::all();
        return Inertia::render('Event/Index', ['events' => $events]);
    }

    public function publicShow($id)
    {
        // dd($id);
        $event = Event::findOrFail($id);
        // dd($event);
        return Inertia::render('Event/Show', ['event' => $event]);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return Inertia::render('Admin/Event/Show', ['event' => $event]);
    }

    public function create(Request $req)
    {

        $event = new Event;
        $event->title = $req->title;
        $event->description = $req->description;
        $event->location = $req->location;
        $event->price = $req->price;
        $event->date = $req->date;
        $event->save();

        return back();
        // dd($req->title);
    }

    public function join(Request $req)
    {
        $event = Event::findOrFail($req->id);
        $user = auth()->user();
        $event_user = new EventParticipant;
        $event_user->user_id = $user->id;
        $event_user->event_id = $event->id;
        $event_user->save();
    }
}
