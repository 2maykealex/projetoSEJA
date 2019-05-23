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
        $publisher_id = auth()->user()->person->publisher->id;
        $congresses = Congresses::where('publisher_id',$publisher_id)->orderby('id', 'desc')->get();
        return view('publisher.congress.index', compact('congresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subscriptionTypes = SubscriptionType::orderby('id')->get();
        return view('publisher.congress.new', compact('subscriptionTypes'));
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Congress  $congress
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $congress = Congress::where('id', $id)->get()->first();
        $subscriptionType = SubscriptionType::where('id', $congress->subscription_type_id)->orderby('id')->get()->first();
        return view('publisher.congress.show', compact('congress', 'subscriptionType'));
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
