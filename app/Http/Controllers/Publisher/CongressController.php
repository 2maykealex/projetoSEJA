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
        $person_id = auth()->user()->person->id;
        $congresses = Congress::where('person_id', $person_id)->orderby('id', 'desc')->get();
        return view('publisher.congress.index', compact('congresses'));
    }

    public function show($id)
    {
        $congress = Congress::where('id', $id)->get()->first();
        return view('publisher.congress.show', compact('congress'));
    }
}
