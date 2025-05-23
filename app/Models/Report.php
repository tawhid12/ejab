<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(ReportType::class,'report_type_id','id');
    }
}
