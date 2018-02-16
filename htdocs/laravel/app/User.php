<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','photo','role','permission','facebook','town','address','post_limit','phone'
    ];
    //if u want to store in database table column u will use this attribute $casts
    protected $casts=['permission'=>'array',];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //this function user can have many car
    public function cars(){
        return $this->hasMany('App\Car');
    }
}
