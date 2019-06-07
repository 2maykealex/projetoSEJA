<?php

namespace App\Models;

use App\Models\Person;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function targetAudience(){
        return $this->belongsTo(SubscriptionPlan::class, 'subscription_plans_id');
    }

    public function newPost($dados):Array {
        $publisher = auth()->user()->person->publisher;
        $this->title    = $dados['title'];
        $this->summary  = $dados['summary'];
        $this->text     = $dados['text'];
        $this->image    = $dados['image'];
        $this->subscription_type_id    = $dados['subscription_type_id'];
        $this->publisher_id    = $publisher->id;
        $this->report_type_id  = $dados['report_type_id'];
        $this->post_type_id    = $dados['post_type_id'];

        $save = $this->save();

        if ($save){
            return [
                'success' => true,
                'message' => 'A publicação foi realizada com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível realizar esta publicação. Verifique!'
        ];
    }

    public function updatePost($dados):Array {
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
                'message' => 'O cadastro atualizado com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível atualizar este cadastro. Verifique!'
        ];
    }

    public function author(){
        return $this->belongsTo(Person::class, 'person_id');
    }
}
