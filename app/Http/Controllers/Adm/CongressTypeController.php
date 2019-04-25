<?php

namespace App\Http\Controllers\Adm;

use App\Models\CongressType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CongressTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $congressTypes = CongressType::orderby('id')->get();
        return view('adm.congressType.index', compact('congressTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.congressType.new');
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
        $congressType = new CongressType;
        $idNewCongressType = $congressType->newCongressType($data);

        if($idNewCongressType){
            return view('adm.congressType.index');
        }

        return view('adm.congressType.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CongressType  $congressType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $congressType = CongressType::where('id', $id)->orderby('id')->get();
        return view('adm.congressType.show', compact('congressType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CongressType  $congressType
     * @return \Illuminate\Http\Response
     */
    public function edit(CongressType $congressType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CongressType  $congressType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CongressType $congressType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CongressType  $congressType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CongressType $congressType)
    {
        //
    }
}
