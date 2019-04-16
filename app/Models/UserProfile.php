<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    public function profileAccess(){
        return $this->belongsTo(ProfileAccess::class, 'user_profile_id');
    }
}
