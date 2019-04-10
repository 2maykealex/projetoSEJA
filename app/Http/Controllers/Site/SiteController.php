<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

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
        // dd($request->all());
        // $user = User::all();

        $user = DB::select(
            DB::raw('SELECT * FROM users ORDER BY email ')
        );
        // $user = User::where('email', $request->email)->get()->first();
        
        if ($user){
            if ($user->password == $request->password){
                dd('USUÁRIO AUTENTICADO!');
            }else{
                dd('SENHA INCORRETA!');
            }
        }else{
            dd('USUÁRIO NÃO ENCONTRADO!');
        }
        return view('site.login');
    }

    public function subscribe(){
        return view('site.subscribe');
    }
}
