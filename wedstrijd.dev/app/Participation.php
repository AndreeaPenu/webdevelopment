<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participation extends Model
{
    //
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id','user_id','photo_id', 'created_at'
    ];


    public function user(){
        return $this->belongsTo('\App\User');
    }


    public function photo(){
        return $this->belongsTo('\App\Photo');
    }

    public function likes(){
        return $this->belongsToMany('App\User','likes');
    }


    # Use this to count the likes
    public function getLikeCountAttribute(){
        return $this->likes->count();
    }
}
