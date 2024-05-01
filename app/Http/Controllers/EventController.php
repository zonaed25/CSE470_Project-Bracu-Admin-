<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Fetch all events from the database

        return view('admin.event.index', compact('events')); // Pass the events data to the view
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'title' => 'required|string|max:255',
        ]);

        $event = new Event();
        $event->date = $request->date;
        $event->title = $request->title;
        $event->save();

        return redirect()->back()->with('success', 'Event added successfully.');
    }

    public function edit(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'date' => 'required|date',
            'title' => 'required|string|max:255',
        ]);

        $event->update([
            'date' => $request->date,
            'title' => $request->title,
        ]);

        return redirect()->back()->with('success', "Event updated successfully. Date: {$request->date}");
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back()->with('success', 'Event deleted successfully.');
    }

}
