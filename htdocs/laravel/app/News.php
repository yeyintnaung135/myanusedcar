<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable  =['name','description','photo','uploat_at'];
    public    $table     ='new';
    public    $timestamps=false;
}
