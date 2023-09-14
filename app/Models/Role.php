<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /*
    * relation with user
    */
    /* One To Many */
    /*public function users()
    {
        return $this->hasMany(User::class);
    }*/
    /* Many To Many Relation */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Role.php
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    
}
