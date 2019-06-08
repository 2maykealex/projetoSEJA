<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Event;
use App\Models\SubscriptionType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publisher_id = auth()->user()->person->publisher->id;
        $events = Event::where('publisher_id',$publisher_id)->orderby('id', 'desc')->get();
        return view('publisher.event.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::where('id', $id)->get()->first();
        $subscriptionType = SubscriptionType::where('id', $event->subscription_type_id)->orderby('id')->get()->first();
        return view('publisher.event.show', compact('event', 'subscriptionType'));
    }
}
