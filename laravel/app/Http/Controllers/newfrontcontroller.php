<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;

class newfrontcontroller extends Controller
{
    public function index()
    {
        $news=News::orderby('id','desc')->paginate(5);
        return view('front.newlistfront',['news'=>$news]);
    }
/*if u have 2 parameter in routes u have to add these both parameters in controller if routes param is car in ur
controller it muse be carId
u can not reterieve only one param from ur route if u have 2 or more param*/
    public function detail($langId,$newId)
    {
        $new=News::where('id',$newId)->get();
        return view('front.detailnewfront',['new'=>$new]);
    }
}
