<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    //
    protected $table='subscribe';
    protected $fillable=['email','uploat_at','reading'];
    public $timestamps=false;
}
