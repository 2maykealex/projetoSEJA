<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Congress extends Model
{
    public function newCongress($dados):Array {
        $publisher = auth()->user()->person->publisher;
        $this->title    = $dados['title'];
        $this->summary  = $dados['summary'];
        $this->text     = $dados['text'];
        $this->image    = $dados['image'];
        $this->subscription_type_id    = $dados['subscription_type_id'];
        $this->publisher_id    = $publisher->id;

        $save = $this->save();

        if ($save){
            return [
                'success' => true,
                'message' => 'O Congresso foi cadastrado com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível cadastrar este Congresso. Verifique!'
        ];
    }

    public function updateCongress($dados):Array {
        $publisher = auth()->user()->person->publisher;
        $this->title    = $dados['title'];
        $this->summary  = $dados['summary'];
        $this->text     = $dados['text'];
        $this->subscription_type_id    = $dados['subscription_type_id'];
        if (isset($dados['image'])){
            $this->image    = $dados['image'];
        }
        $this->subscription_type_id    = $dados['subscription_type_id'];
        $this->publisher_id    = $publisher->id;

        $save = $this->save();

        if ($save){
            return [
                'success' => true,
                'message' => 'O Congresso foi atualizado com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível atualizar este Congresso. Verifique!'
        ];
    }

    public function author(){
        return $this->belongsTo(Person::class, 'person_id');
    }
}
