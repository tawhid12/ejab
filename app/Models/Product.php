<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'brand_id', 'description', 'barcode', 'image', 'weight', 'width', 'height', 'length'];

    public function brand()
    {
        return $this->belongsTo(brand::class);
    }
}
