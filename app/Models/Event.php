<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function type(){
        return $this->belongsTo(EventType::class, 'event_type_id');
    }

    public function newEvent($dados):Array {
        $person_id = auth()->user()->person->id;
        $this->title    = $dados['title'];
        $this->summary  = $dados['summary'];
        $this->text     = $dados['text'];
        $this->image    = $dados['image'];
        $this->subscription_type_id    = $dados['subscription_type_id'];
        $this->person_id = $person_id;

        $save = $this->save();

        if ($save){
            return [
                'success' => true,
                'message' => 'O Evento foi cadastrado com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível cadastrar este evento. Verifique!'
        ];
    }

    public function updateEvent($dados):Array {
        $person_id = auth()->user()->person->id;
        $this->title    = $dados['title'];
        $this->summary  = $dados['summary'];
        $this->text     = $dados['text'];
        $this->subscription_type_id    = $dados['subscription_type_id'];
        if (isset($dados['image'])){
            $this->image    = $dados['image'];
        }
        // $this->subscription_type_id    = $dados['subscription_type_id'];
        $this->person_id    = $person_id;

        $save = $this->save();

        if ($save){
            return [
                'success' => true,
                'message' => 'O evento foi atualizado com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível atualizar este evento. Verifique!'
        ];
    }
    
    public function author(){
        return $this->belongsTo(Person::class, 'person_id');
    }
}
