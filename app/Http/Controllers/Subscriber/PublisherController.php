<?php

namespace App\Http\Controllers\Subscriber;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publisher;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = Publisher::all();
        return view('subscriber.publisher.index', compact('publishers'));
    }

    public function show($id)
    {
        $publisher = Publisher::where('person_id', $id)->get()->first();
        return view('subscriber.publisher.show', compact('publisher'));
    }
}
