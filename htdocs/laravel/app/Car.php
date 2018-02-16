<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Car extends Model
    {
        protected $fillable  =['brand','model','engine','price','detail','price','feature','photo1','photo2','photo3','photo4','appliances','photo5','photo6','photo7','license','doors','fuel','year','body_type','transmittion','exterior_color','interior_color','view_count','uploat_at','user_id','license','km'];
        public    $table     ='car_list';
        public    $timestamps=false;
        //this function is cars own by user
        public function owner()
        {
            //node that if yout dont set secified column name(user_id) in belongsTo it will return only null
            return $this->belongsTo('App\User','user_id');
        }

    }
