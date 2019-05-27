<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportType extends Model
{
    public function publisherReport(){
        return $this->hasOne(PublisherReport::class);
    }
}
