<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // collegamento al modello post
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
