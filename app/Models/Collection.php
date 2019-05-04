<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function newColl($dados):Array {
        $collection = Collection::where('name', $dados['name'])->get()->first();
        
        if (!$collection){
            $this->name      = $dados['name'];
            $save = $this->save();
            
            if($save){
                return [
                    'success' => true,
                    'message' => 'O cadastro realizado com sucesso!'
                ];
            } else{
                return [
                    'success' => false,
                    'message' => 'Não foi possível realizar este cadastro. Verifique!'
                ];
            }
        } else {
            return [
                'success' => false,
                'message' => 'Já existe um cadastro com essa descrição! Verifique!'
            ];
        }
    }
    public function updateCollection($dados):Array {
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
