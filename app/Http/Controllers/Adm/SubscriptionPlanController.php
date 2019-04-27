<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;

class SubscriptionPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptionPlans = SubscriptionPlan::orderby('id')->get();
        return view('adm.subscriptionPlan.index', compact('subscriptionPlans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.subscriptionPlan.new');
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
        $subscriptionPlan = new SubscriptionPlan;
        $idNewSubscriptionPlan = $subscriptionPlan->newSubscriptionPlan($data);

        if($idNewSubscriptionPlan){
            return view('adm.subscriptionPlan.index');
        }

        return view('adm.subscriptionPlan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscriptionPlan = SubscriptionPlan::where('id', $id)->get()->first();
        return view('adm.subscriptionPlan.show', compact('subscriptionPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscriptionPlan = SubscriptionPlan::where('id', $id)->get()->first();
        return view('adm.subscriptionPlan.edit', compact('subscriptionPlan'));
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
        $subscriptionPlan = new SubscriptionPlan;
        $idNewSubscriptionPlan = $subscriptionPlan->updateSubscriptionPlan($data);

        if($idNewSubscriptionPlan){
            return view('adm.SubscriptionPlan.index');
        }

        return view('adm.SubscriptionPlan.index');
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
