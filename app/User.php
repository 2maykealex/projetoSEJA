<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function newUser($data):Array{

        $user = User::where('email', $data['email'])->get()->first(); //verifica se existe o email de novo usuário no banco 

        if (!$user){             //caso não, cadastre 
            $this->name        = $data['name'];
            $this->email       = $data['email'];
            $this->password    = $data['password'];

            $updated = $this->save();

            if ($updated){
                return [
                    $this->id
                ];
            }

        } else{
            return [0];
        }
    }
}
