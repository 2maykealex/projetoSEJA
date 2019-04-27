<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileAccess extends Model
{
    public function newProfileAccess($data):Array{
        $this->name = $data['name'];

        $updated = $this->save();

        if ($updated){
            return [
                $this->id
            ];
        } else{
            return [0];
        }
    }

    public function updateProfileAccess($data):Array{
        $this->name = $data['name'];

        $updated = $this->save();

        if ($updated){
            return [
                $this->id
            ];
        } else{
            return [0];
        }
    }
}
