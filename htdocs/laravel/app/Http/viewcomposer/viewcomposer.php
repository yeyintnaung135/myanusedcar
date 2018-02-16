<?php
namespace App\Http\viewcomposer;
use App\User;
use Illuminate\view\view;
use Illuminate\Support\Facades\Auth;

class viewcomposer{
    public function compose(View $view){
        $id=Auth::user()->id;
        $userpostid=User::find($id)->cars;
        return $view->with('userpostid',$userpostid);
    }
}