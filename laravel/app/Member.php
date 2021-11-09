<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable  =['name','email','facebook','twitter','photo','uploat_at'];
    public $table='user';
    public    $timestamps=false;

}
