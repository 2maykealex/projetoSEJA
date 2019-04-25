<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    public function type(){
        return $this->belongsTo(SubscriptionType::class, 'subscription_type_id');
    }

    public function collection(){
        return $this->belongsTo(Collection::class);
    }
}
