<?php

namespace App\Http\Controllers\Adm;

use App\Models\Event;
use App\Models\EventType;
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
        $person_id = auth()->user()->person->id;
        // $eventType = EventType::where(function ($query) {
        //     return $query->where('name', '!=', "congresso")
        //           ->Where('name', '!=', "curso");
        // })->get();

        $events = Event::where('event_type_id','!=', 1)->orderby('id', 'desc')->get();
        return view('adm.event.index', compact('events'));
    }

    public function create()
    {
        $eventTypes = EventType::orderby('id')->get();
        return view('adm.event.new', compact('eventTypes'));
    }

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

    public function show($id)
    {
        $event = Event::where('id', $id)->get()->first();
        $subscriptionType = SubscriptionType::where('id', $event->subscription_type_id)->orderby('id')->get()->first();
        return view('adm.event.show', compact('event', 'subscriptionType'));
    }

    public function edit($id)
    {
        $event = Event::where('id', $id)->get()->first();
        $eventTypes = EventType::orderby('id')->get();
        return view('adm.event.edit', compact('event', 'eventTypes'));
    }

    public function update(Request $request)
    {
        $data = $request->all();

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
        $event = Event::where('id', $data['id'])->get()->first();
        $message = $event->updateEvent($data);
        return redirect()->back()->with($message);
    }
}
