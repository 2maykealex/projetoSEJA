<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfile;
use App\Models\State;
use App\Models\City;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function contact(){
        return "Contatos";
    }

    public function whoWeare(){
        return "Quem Somos";
    }

    public function whereWeAre(){
        return "Onde estamos";
    }

    public function doLogin(){
        return view('site.login');
    }

    public function validateLogin(Request $request){
        $user = User::where('email', $request->email)->get()->first();
        if ($user){
            if(Hash::check($request->password, $user->password)) {
                Auth::login($user, true);
                $route = $user->userProfile->profileAccess->name.'.home';
                return redirect()->route($route);
            } else {
                return "SENHA INCORRETA";
            }
        }else{
            return "USUÁRIO NÃO ENCONTRADO!";
        }
    }

    public function subscribe(){
        $states = State::orderby('initials')->get();
        return view('site.subscribe', compact('states'));
    }

    public function listCities($idUF){
        $cities = City::where('state_id', $idUF)->orderby('name')->get();
        return $cities;
    }
}
