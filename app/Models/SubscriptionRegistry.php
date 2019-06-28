<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionRegistry extends Model
{
    public function newSubscriber($data):Array{
        $this->people_id = $data['people_id'];
        $save = $this->save();
        if ($save){
            return [
                'success' => true,
                'message' => 'O cadastro realizado com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível realizar este cadastro. Verifique!'
        ];
    }

    public function subscriptionPlan(){
        return $this->hasOne(SubscriptionPlan::class, 'id');
    }
}
