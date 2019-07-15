<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseItem extends Model
{
    public function newCourseItem($dados):Array {
        $this->course_id = $dados['course_id'];
        $this->summary  = $dados['summary'];
        $this->file    = $dados['file'];

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
}
