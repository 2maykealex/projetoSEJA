<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionRegistry extends Model
{
    public function newSubscriptionRegistry($data):Array{
        $this->person_id = $data['person_id'];
        $this->subscription_plan_id = $data['subscription_plan_id'];
        $this->status = $data['status'];
        $this->expires_in = $data['expires_in'];
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
