<?php

namespace App\Http\Controllers\Adm;

use App\Models\Congress;
use App\Models\SubscriptionType;
use App\Http\Controllers\Controller;

class CongressController extends Controller
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
        $congresses = Congress::where('person_id', $person_id)->orderby('id', 'desc')->get();
        return view('adm.congress.index', compact('congresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person_id = auth()->user()->person->id;
        $subscriptionTypes = SubscriptionType::orderby('id')->get();
        return view('adm.congress.new', compact('subscriptionTypes','publisher'));
    }

    public function show($id)
    {
        $congress = Congress::where('id', $id)->get()->first();
        $subscriptionType = SubscriptionType::where('id', $congress->subscription_type_id)->orderby('id')->get()->first();
        return view('adm.congress.show', compact('congress', 'subscriptionType'));
    }
}
