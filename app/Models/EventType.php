<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    public function newEventType($dados):Array{
        $this->name = $dados['name'];
        $save = $this->save();

        if ($save){
            return [
                $this->id
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível realizar este cadastro. Verifique!'
        ];
    }

    public function updateEventType($dados):Array {
        $this->name      = $dados['name'];
        $update = $this->save();

        if ($update){
            return [
                'success' => true,
                'message' => 'O cadastro foi atualizado com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível realizar este cadastro. Verifique!'
        ];
    }
}
