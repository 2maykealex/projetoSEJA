<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Event;
use App\Models\SubscriptionType;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = auth()->user()->person;
        $person_id = $person->id;
        $events = Event::where('person_id', $person_id)->orderby('id', 'desc')->get();
        return view('publisher.event.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::where('id', $id)->get()->first();
        $subscriptionType = SubscriptionType::where('id', $event->subscription_type_id)->orderby('id')->get()->first();
        return view('publisher.event.show', compact('event', 'subscriptionType'));
    }
}
