<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'category_id'
    ];

    public function category()
    {
        //funzione di relazione
        //il post ha UNA sola categoria
        return $this->belongsTo('App\Category');
    }
}
