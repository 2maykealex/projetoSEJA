<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checkUser($email){
        $user = User::where('email', $email)->get()->first(); //verifica se existe o email de novo usuário no banco 
        return $user;
    }
}
