<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    //
    protected $fillable = ['visit_counts'];
    public $table = 'website';
    public $timestamps = false;

    public function incrcnt()
    {
        $this->visit_counts = $this->visit_counts + 1;
        $this->save();
    }
}
