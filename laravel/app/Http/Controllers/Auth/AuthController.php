<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */


    protected $redirectTo;
    protected $redirectAfterLogout;
    protected $id;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //if back link is include user it will go to front addcar
        //notic in this return url are go to routes.php and langpath is from session

            $this->middleware('guest', ['except' => 'logout']);

            $this->redirectTo ='/index';
            $this->redirectAfterLogout='/index';



    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messges=['phone.max'=>'Phone no must be maximum 11 numbers','phone.min'=>'Phone no must be at least 8 numbers'];
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6|max:13',
            'photo'    => 'required|mimes:png,jpg,jpeg,gif',
            'phone'    => 'required|max:11|min:8',
            'address'=>'max:120',
            'town'=>'required|max:120',
        ],$messges);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create($rq)
    {
        /**$rq is object why i use rq instead of data array
         *to upload photo file
         **/
        $data=$rq->all();
        $namephoto=time().'profile'.$rq->file('photo')->getClientOriginalName();
        $rq->file('photo')->move(public_path().'/backend/images/memberlist',$namephoto);
        if(str_contains(url()->previous(),'user')){
            //this is used when i use email comfirmation
            // $data['role']=str_random(10);
            Session::flash('registered','Successfully registered');
            $data['role']='member';
        }
//i donot use bcrypt for password because it add radom salt thus we cannot check password next time
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role'=>$data['role'],
            'photo'=>$namephoto,
            'phone'=>$data['phone'],
            'town'=>$data['town'],
            'address'=>$data['address'],
            'post_limit'=>'2',
        ]);
    }
}
