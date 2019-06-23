<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\SubscriptionPlan;
use App\Models\Collection;

class SubscriptionType extends Model
{
    public function subscriptionPlans(){
        return $this->hasMany(SubscriptionPlan::class);
    }

    public function newSubscriptionType($dados):Array {
        $this->name = $dados['name'];
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

    public function updateSubscriptionType($dados):Array {
        $this->name = $dados['name'];
        $save = $this->save();

        if ($save){
            return [
                'success' => true,
                'message' => 'O cadastro foi atualizado com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível atualizar este cadastro. Verifique!'
        ];
    }
}
