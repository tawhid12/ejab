<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(OurBusiness::class,'company_id','id');
    }
}
