<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // campi fillabili
    protected $fillable = ['title', 'author', 'content', 'category_id'];

    // correlazione modello 
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
