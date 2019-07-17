<?php

namespace App\Http\Controllers\Subscriber;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventType;
use App\Models\SubscriptionType;

class CongressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person_id = auth()->user()->person->id;
        $eventType = EventType::where('name', 'congresso')->get()->first();
        $events = Event::where('event_type_id', $eventType->id)->orderby('id', 'desc')->get();
        return view('subscriber.congress.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::where('id', $id)->get()->first();
        $subscriptionType = SubscriptionType::where('id', $event->subscription_type_id)->orderby('id')->get()->first();
        return view('subscriber.congress.show', compact('event', 'subscriptionType'));
    }
}
