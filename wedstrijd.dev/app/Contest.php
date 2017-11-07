<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    protected $fillable = [
        'start','end'
    ];

    public function participations(){
        return $this->belongsToMany('App\Participation','participations');
    }


}
