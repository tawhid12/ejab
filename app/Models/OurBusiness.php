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
}
