<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Congress;
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
        return view('publisher.congress.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publisher.congress.new');
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
     * @param  \App\Models\Congress  $congress
     * @return \Illuminate\Http\Response
     */
    public function show(Congress $congress)
    {
        return view('publisher.congress.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Congress  $congress
     * @return \Illuminate\Http\Response
     */
    public function edit(Congress $congress)
    {
        return view('publisher.congress.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Congress  $congress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Congress $congress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Congress  $congress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Congress $congress)
    {
        //
    }
}
