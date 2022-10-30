<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $event["data"] = Event::all();
        return view("admins.show-events", $event);
    }

    public function create(){
        return view("admins.create-events");
    }

    public function store(Request $request){
        $validate = $request->validate([
            "title" => "required",
            "author" => "required",
            "location" => "required",
            "time" => "required"
        ]);

        $event = new Event;
        $event->title = $request->title;
        $event->author = $request->author;
        $event->location = $request->location;
        $event->time = $request->time;
        $event->save();

        return redirect()->route("event-admin");
    }

    public function edit($id){
        $event["event"] = Event::find($id);
        return view("admins.edit-events", $event);
    }

    public function update(Request $request){
        $request->validate([
            "title" => "required",
            "author" => "required",
            "location" => "required",
            "time" => "required"
        ]);

        $event = Event::find($request->id);
        $event->title = $request->title;
        $event->author = $request->author;
        $event->location = $request->location;
        $event->time = $request->time;
        $event->save();

        return redirect()->route("event-admin");
    }

    public function destroy($id){
        $event = Event::find($id);
        $event->delete();

        return redirect()->route("event-admin");
    }
}
