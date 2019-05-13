<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function targetAudience(){
        return $this->belongsTo(SubscriptionPlan::class, 'subscription_plans_id');
    }
}
