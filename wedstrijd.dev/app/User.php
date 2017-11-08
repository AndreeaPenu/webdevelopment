<?php

namespace App;
use Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

/**
 * @property  role
 */
class User extends Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $dates = ['deleted_at'];


    protected $fillable = [
        'name', 'email', 'password', 'facebook_id', 'ip_address', 'address', 'town', 'has_voted', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function participation(){
        return $this->hasOne('\App\Participation');
    }

    public function likes(){
        return $this->belongsToMany('App\Participation', 'likes', 'user_id','participation_id');
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function isAdmin(){
        if($this->role->name == "admin"){
            return true;
        }
        return false;
    }


    public function getId()
    {
        return $this->id;
    }
}
