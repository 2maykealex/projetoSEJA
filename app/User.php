<?php

namespace App;

use App\Models\UserProfile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function userProfile(){
        return $this->hasOne(UserProfile::class)->with('profileAccess');
    }

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
        $this->name        = $data['name'];
        $this->email       = $data['email'];
        $this->password    = bcrypt($data['password']);

        $updated = $this->save();

        if ($updated){
            return [
                $this->id
            ];
        }
    }
}
