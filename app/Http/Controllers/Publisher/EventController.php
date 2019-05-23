<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Event;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subscriptionTypes = SubscriptionType::orderby('id')->get();
        return view('publisher.event.new', compact('subscriptionTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->image->getClientOriginalName();

        if($request->hasFile('image') && $request->file('image')->isValid() ){
            $date = date('Y-m-d-H-i');
            $name = kebab_case($date).'-'.$request->image->hashName();
            $extension = $request->image->extension();
            $nameFile  = "{$name}.{$extension}";

            $data['image'] = $nameFile;
            $upload = $request->image->storeAs('img/events', $nameFile);

            if(!$upload)
                return redirect()->back()->with('error', 'Falha ao enviar a imagem');
        }
        
        $event = new Event;
        $message = $event->newEvent($data);
        return redirect()->back()->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::where('id', $id)->get()->first();
        $subscriptionType = SubscriptionType::where('id', $event->subscription_type_id)->orderby('id')->get()->first();
        return view('publisher.event.show', compact('event', 'subscriptionType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('publisher.event.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
