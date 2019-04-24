<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubscriptionType;

class SubscriptionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptionTypes = SubscriptionType::orderby('id')->get();
        return view('adm.subscriptionType.index', compact('subscriptionTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.subscriptionType.new');
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
        $SubscriptionType = new SubscriptionType;
        $idNewSubscriptionType = $SubscriptionType->newSubscriptionType($data);

        if($idNewSubscriptionType){
            return view('adm.SubscriptionType.index');
        }

        return view('adm.SubscriptionType.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscriptionType = SubscriptionType::where('id', $id)->orderby('id')->get();
        return view('adm.subscriptionType.show', compact('subscriptionType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscriptionType = SubscriptionType::where('id', $id)->orderby('id')->get();
        return view('adm.subscriptionType.edit', compact('subscriptionType'));
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
        $data = $request->all();
        $SubscriptionType = new SubscriptionType;
        $idNewSubscriptionType = $SubscriptionType->updateSubscriptionType($data);
        
        if($idNewSubscriptionType){
            return view('adm.SubscriptionType.index');
        }

        return view('adm.SubscriptionType.index');
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
