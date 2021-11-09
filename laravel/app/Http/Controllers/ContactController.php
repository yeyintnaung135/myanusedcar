<?php

namespace App\Http\Controllers;

use App\Contactmails;
use App\Events\ContactEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    //when user is send content messgae this function will generate
    public function send(Request $request)

    {
        $input=$request->all();

        $validator=Validator::make($request->all(),['email'=>'required|email|max:30','name'=>'required|max:30','subject'=>'required|max:40','message'=>'required|max:2500']);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();

        }
        $input['send_at']=Carbon::now();
        $ev_contact= Contactmails::create($input);
      //event(new ContactEvent($ev_contact));
        Session::flash('send', 'Successfull! Your message have  been sent');


        return redirect()->back();
    }

}
