<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function posts()
    {
        //funzione di relazione
        //la categoria ha molti post associati
        return $this->hasMany('App\Post');
    }
}
