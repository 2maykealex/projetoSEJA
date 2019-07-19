<?php

namespace App\Http\Controllers\Adm;

use App\Models\Congress;
use App\Models\SubscriptionType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventType;
use App\Models\Event;

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
        $congresses = Event::where('event_type_id', $eventType->id)->orderby('id', 'desc')->get();
        return view('adm.congress.index', compact('congresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person = auth()->user()->person;
        $subscriptionTypes = SubscriptionType::orderby('id')->get();
        return view('adm.congress.new', compact('subscriptionTypes','person'));
    }

    public function show($id)
    {
        $congress = Event::where('id', $id)->get()->first();
        $subscriptionType = SubscriptionType::where('id', $congress->subscription_type_id)->orderby('id')->get()->first();
        return view('adm.congress.show', compact('congress', 'subscriptionType'));
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
            $upload = $request->image->storeAs('img/congresses', $nameFile);

            if(!$upload)
                return redirect()->back()->with('error', 'Falha ao enviar a imagem');
        }
        
        $congress = new Congress;
        $message = $congress->newCongress($data);
        return redirect()->back()->with($message);
    }

    public function edit($id, Request $request)
    {
        $person = auth()->user()->person;
        $person_id = $person->id;
        $congress = Congress::where('id', $id)->get()->first();
        $subscriptionTypes = SubscriptionType::orderby('id')->get();

        return view('adm.congress.edit', compact('congress', 'subscriptionTypes', 'person'));
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
            $upload = $request->image->storeAs('img/congresses', $nameFile);

            if(!$upload)
                return redirect()->back()->with('error', 'Falha ao enviar a imagem');
        }
        $congress = Congress::where('id', $data['id'])->get()->first();
        $message = $congress->updateCongress($data);
        return redirect()->back()->with($message);
    }
}
