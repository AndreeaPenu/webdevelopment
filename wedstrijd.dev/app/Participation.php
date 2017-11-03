<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    //

    protected $fillable = [
        'photo_id'
    ];


    public function user(){
        return $this->belongsTo('\App\User');
    }


    public function photo(){
        return $this->belongsTo('\App\Photo');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }
}
