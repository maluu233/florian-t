<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjectFlorian extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'vidpovidalnuy');
    }
}
