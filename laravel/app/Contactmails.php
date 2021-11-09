<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactmails extends Model
{
    protected $fillable  =['email','name','subject','message','send_at','reading'];
    public    $table     ='contactmails';
    public    $timestamps=false;
    //this function is cars own by user

}