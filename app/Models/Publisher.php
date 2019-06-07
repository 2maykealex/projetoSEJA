<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function person(){
        return $this->belongsTo(Person::class, 'person_id');
    }
}
