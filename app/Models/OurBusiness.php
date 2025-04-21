<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurBusiness extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'page_slug';
    }
    public function brand(){
        return $this->hasMany(brand::class,'our_business_id');
    }
}
