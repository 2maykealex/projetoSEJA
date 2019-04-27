<?php

namespace App\Http\Controllers\Adm\Security;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProfileAccess;

class ProfileAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profilesAccesses = ProfileAccess::orderby('name')->get();
        return view('adm.security.profileAccess.index', compact('profilesAccesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.security.profileAccess.new');
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

        $profilesAccess = new ProfileAccess;

        $idProfileAccess = $profilesAccess->newProfileAccess($data);

        if($idProfileAccess){
            return view('adm.security.profileAccess.index');
        }

        return view('adm.security.profileAccess.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profilesAccess = ProfileAccess::where('id', $id)->get()->first();
        return view('adm.security.profileAccess.show', $profilesAccess);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profilesAccess = ProfileAccess::where('id', $id)->get()->first();
        return view('adm.security.profileAccess.edit', $profilesAccess);
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

        $profilesAccess = new ProfileAccess;

        $idProfileAccess = $profilesAccess->updateProfileAccess($data);

        if($idProfileAccess){
            return view('adm.security.profileAccess.index');
        }

        return view('adm.security.profileAccess.index');
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
