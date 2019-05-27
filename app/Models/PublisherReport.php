<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublisherReport extends Model
{
    public function reportType(){
        return $this->belongsTo(ReportType::class)->orderby('name', 'asc');
    }
}
