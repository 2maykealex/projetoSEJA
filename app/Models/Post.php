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
        // dd($publisher);

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

    public function updatePost($dados):Array {
        $publisher = auth()->user()->person->publisher;
        // $person = Person::where('user_id', $user->id)->get()->first();
        // $publisher = Publisher::where('person_id', $person->id)->first();

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
                'message' => 'O cadastro atualizado com sucesso!'
            ];
        }

        return [
            'success' => false,
            'message' => 'Não foi possível atualizar este cadastro. Verifique!'
        ];
    }
}
