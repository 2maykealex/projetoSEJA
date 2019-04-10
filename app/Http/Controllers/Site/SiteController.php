<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

                // dd(auth()->user());
                return "USUÁRIO AUTENTICADO";
            } else {
                return "SENHA INCORRETA";
            }
        }else{
            return "USUÁRIO NÃO ENCONTRADO!";
        }
    }

    public function subscribe(){
        return view('site.subscribe');
    }
}
