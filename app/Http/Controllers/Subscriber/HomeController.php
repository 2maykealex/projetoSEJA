<?php

namespace App\Http\Controllers\Subscriber;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Event;
use App\Models\EventType;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = auth()->user()->person;
        $subscription_type_id = $person->subscriptionRegistry->subscriptionPlan->subscription_type_id;
        $posts = Post::where('subscription_type_id', $subscription_type_id)->where('deleted', 0)->orderby('id', 'desc')->get();
        
        $eventType = EventType::where(function ($query) {
            return $query->where('name', '!=', "congresso")
                  ->Where('name', '!=', "curso");
        })->get();

        $events = Event::whereIn('event_type_id', $eventType)->orderby('id', 'desc')->get();

        $courses = Event::where('deleted', 0)->orderby('id', 'desc')->get();
        return view('subscriber.index', compact('posts', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
