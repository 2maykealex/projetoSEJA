<?php

namespace App\Http\Controllers\Adm;

use App\Models\EventType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventsTypes = EventType::orderby('id')->get();
        return view('adm.eventType.index', compact('eventsTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.eventType.new');
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
        $eventType = new EventType;
        $message = $eventType->newEventType($data);
        return redirect()->back()->with(compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventType = EventType::where('id', $id)->get()->first();
        return view('adm.eventType.show', compact('eventType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventType = EventType::where('id', $id)->get()->first();
        return view('adm.eventType.edit', compact('eventType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventType $eventType)
    {
        $data = $request->all();
        $eventType = EventType::where('id', $data['id'])->get()->first();
        $message = $eventType->updateEventType($data);
        return redirect()->back()->with($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventType  $eventType
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventType $eventType)
    {
        //
    }
}
