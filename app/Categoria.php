<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    function produto(){
        return $this->hasMany('App\Produto');
    }
}
