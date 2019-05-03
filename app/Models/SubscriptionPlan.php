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

    public function newSubscriptionPlan($dados):Array {
        $this->collection_id = $dados['collection_id'];
        $this->subscriptionType_id = $dados['subscriptionType_id'];
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

    public function updateSubscriptionPlan($dados):Array {
        $this->collection_id = $dados['collection_id'];
        $this->subscriptionType_id = $dados['subscriptionType_id'];
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
}
