<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return "Fazer Login";
    }

    public function subscribe(){
        return "Se inscrever";
    }
}
