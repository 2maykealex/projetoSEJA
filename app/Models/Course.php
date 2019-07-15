<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function newCourse($dados):Array {
        $this->name    = $dados['name'];
        $this->summary  = $dados['summary'];
        $this->image    = $dados['image'];
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

    public function courseItens(){
        return $this->hasMany(CourseItem::class);
    }
}
