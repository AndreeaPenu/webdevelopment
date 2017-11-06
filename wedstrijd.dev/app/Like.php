<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{

    use SoftDeletes;


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function participation(){
        return $this->belongsTo('App\Participation');
    }
}
