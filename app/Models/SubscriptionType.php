<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionType extends Model
{
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
                'message' => 'O cadastro realizado com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível realizar este cadastro. Verifique!'
        ];
    }
}
