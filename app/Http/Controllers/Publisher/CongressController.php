<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Congress;
use App\Models\SubscriptionType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CongressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publisher_id = auth()->user()->person->publisher->id;
        $congresses = Congress::where('publisher_id',$publisher_id)->orderby('id', 'desc')->get();
        return view('publisher.congress.index', compact('congresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publisher = auth()->user()->person;
        $subscriptionTypes = SubscriptionType::orderby('id')->get();
        return view('publisher.congress.new', compact('subscriptionTypes','publisher'));
    }

    public function show($id)
    {
        $congress = Congress::where('id', $id)->get()->first();
        $subscriptionType = SubscriptionType::where('id', $congress->subscription_type_id)->orderby('id')->get()->first();
        return view('publisher.congress.show', compact('congress', 'subscriptionType'));
    }
}
