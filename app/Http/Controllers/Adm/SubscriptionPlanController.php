<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use App\Models\Collection;
use App\Models\SubscriptionType;

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
        $subscriptionPlan = SubscriptionPlan::where('id', $id)->get();
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
        $collections = Collection::orderby('id')->get();
        $subscriptionTypes = SubscriptionType::orderby('id')->get();
        $subscriptionPlans = SubscriptionPlan::find($id);
        return view('adm.subscriptionPlan.edit', compact('collections', 'subscriptionTypes', 'subscriptionPlans'));
        
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
        $subscriptionPlan = SubscriptionPlan::where('id', $data['id'])->get()->first();
        $updated = $subscriptionPlan->updateSubscriptionPlan($data);
        return view('adm.subscriptionPlan.index', compact('updated'));
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
