<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function type(){
        return $this->belongsTo(EventType::class, 'event_type_id');
    }

    public function newEvent($dados):Array {
        $this->title    = $dados['title'];
        $this->summary  = $dados['summary'];
        $this->text     = $dados['text'];
        $this->image    = $dados['image'];
        $this->event_date    = $dados['event_date'];
        $this->event_type_id    = $dados['event_type_id'];
        $this->person_id = auth()->user()->person->id;

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
        $this->title    = $dados['title'];
        $this->summary  = $dados['summary'];
        $this->text     = $dados['text'];
        $this->event_date    = $dados['event_date'];
        $this->event_type_id    = $dados['event_type_id'];
        if (isset($dados['image'])){
            $this->image  = $dados['image'];
        }
        $this->person_id  = auth()->user()->person->id;;

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
