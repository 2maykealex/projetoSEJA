<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    public function subsType(){
        return $this->belongsTo(SubscriptionType::class);
    }

    public function collection(){
        return $this->belongsTo(Collection::class);
    }
}
