<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    public function profileAccess(){
        return $this->belongsTo(ProfileAccess::class, 'user_profile_id');
    }

    public function newUserProfile($dados):Array {
        $this->user_id          = $dados['user_id'];
        $this->user_profile_id  = $dados['user_profile_id'];

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
