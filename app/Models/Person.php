<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function newPerson($dados):Array {
        $this->user_id   = $dados['user_id'];
        $this->name      = $dados['name'];
        $this->cpf       = $dados['cpf'];
        $this->telephone = $dados['telephone'];
        $this->zipcode   = $dados['zipcode'];
        $this->address   = $dados['address'];
        $this->city_id   = $dados['city_id'];
        $this->image     = $dados['image'];
        
        $update = $this->save();

        if ($update){
            return [
                $this->id
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível realizar este cadastro. Verifique!'
        ];
    }
    public function updatePerson($dados):Array {

        $this->name      = $dados['name'];
        $this->cpf       = $dados['cpf'];
        $this->telephone = $dados['telephone'];
        $this->email     = $dados['email'];
        $this->zipcode   = $dados['zipcode'];
        $this->address   = $dados['address'];
        $this->city_id   = $dados['city'];

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

    public function city(){   #faz o relacionamento com cidades
        return $this->belongsTo(City::class);
    }
}
