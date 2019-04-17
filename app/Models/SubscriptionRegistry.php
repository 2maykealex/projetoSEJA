<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionRegistry extends Model
{
    public function newSubscriber($data):Array{
        $this->people_id = $data['people_id'];

        $updated = $this->save();

        if ($updated){
            return [
                $this->id
            ];
        } else{
            return [0];
        }
    }
}
