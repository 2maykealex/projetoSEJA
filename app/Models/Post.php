<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function targetAudience(){
        return $this->belongsTo(SubscriptionPlan::class, 'subscription_plans_id');
    }

    public function newPost($dados):Array {
        $user = auth()->user();
        $person = Person::where('user_id', $user->id)->get()->first();
        $publisher = Publisher::where('person_id', $person->id)->first();

        $this->title    = $dados['title'];
        $this->summary  = $dados['summary'];
        $this->text     = $dados['text'];
        $this->image    = $dados['image'];
        $this->subscription_type_id    = $dados['subscription_type_id'];
        $this->publisher_id    = $publisher->id;
        // $this->summary  = $dados['summary'];

        $save = $this->save();

        if ($save){
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
}
