<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    public function newPerson($dados):Array {

        $this->name      = $dados['name'];
        $this->cli_doc   = $dados['cli_doc'];
        $this->telephone = $dados['telephone'];
        
        $this->zipcode   = $dados['zipcode'];
        $this->address   = $dados['address'];
        $this->city_id   = $dados['city1'];

        $update = $this->save();

        if ($update){
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
    public function updatePerson($dados):Array {

        $this->name      = $dados['name'];
        $this->cli_doc   = $dados['cli_doc'];
        $this->telephone = $dados['telephone'];
        $this->email     = $dados['email'];
        $this->zipcode   = $dados['zipcode'];
        $this->address   = $dados['address'];
        $this->city_id   = $dados['city1'];

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

        $delete = $this->destroy($dados);

        if ($delete){
            return [
                'success' => true,
                'message' => 'Cadastro removido da base de dados com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível remover este cadastro. Verifique!'
        ];
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
}
