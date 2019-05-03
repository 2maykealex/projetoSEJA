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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profilesAccess = ProfileAccess::where('id', $id)->get()->first();
        return view('adm.security.profileAccess.show', compact('profilesAccess'));
    }
}
