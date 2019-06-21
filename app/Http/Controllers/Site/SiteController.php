<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\State;
use App\Models\City;
use App\Models\Publisher;
use App\Models\Event;
use App\Models\Post;
use App\Models\SubscriptionPlan;

class SiteController extends Controller
{
    public function index(){
        $posts = Post::all();
        $subscriptionPlans = SubscriptionPlan::all();
        $publishers = Publisher::orderby('id')->get();
        $events = Event::orderby('id', 'desc')->get();
        return view('index', compact('posts','subscriptionPlans', 'events', 'publishers'));
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
