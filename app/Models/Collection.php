<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function newCollection($dados):Array {
        $this->name      = $dados['name'];
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

    public function deletePerson($dados):Array {

        #se fará uma marcação para identificar que o cliente foi removido.. mas será somente oculto no sistema

        #

        // $delete = $this->destroy($dados);

        // if ($delete){
        //     return [
        //         'success' => true,
        //         'message' => 'Cadastro removido da base de dados com sucesso!'
        //     ];
        // }

        return [
            'success' => false,
            'message' => 'Não foi possível remover este cadastro. Verifique!'
        ];
    }
}
