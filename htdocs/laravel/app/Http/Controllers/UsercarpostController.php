<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

use Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;


class UsercarpostController extends Controller
{
    //this controller is only to show car post list of a user
    //add edit and delete car functoions use from carcontroller
    public function __construct()
    {
        //authenciation
        $this->middleware('auth', ['except' => 'confirm_email_form']);

    }

    public function create($lang, $id)
    {
        //gate current-user is for authorization .this is to check is equal id of request and auth id
        if (Gate::Check('current-user', $id) == false) {
            return abort(403);

        }
        //check user post limit and user car post count
        if (Gate::Check('post-limit') == true) {
            return abort(302);

        }
        return view('front.adsuser.addcar');

    }

    /*
     * now this email confirmation function is not need
      public function confirm_email_form($langid)
     {
         $user = User::findOrFail(Auth::user()->id);
         $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
         //this is email sent section
         $beautymail->send(['html' => 'emails.confirmemail'], ['user' => $user, 'langid' => $langid], function ($message) use ($user, $langid) {
             $message->from('myancars@gmail.com', 'Myanusedcars');

             $message->to($user->email, $user->name)->subject('Confirmation Link');
         });
         return view('front.confirmemail', ['langid' => $langid, 'email' => $user->email]);
     }
    */

    //follow function is for preminum user's dashboard



    public function getconfirm($lang, $id, $code)
    {
        //this is when user get confirm email and press the link you given
        $user = User::find($id);

        if ($user->role == $code) {
            $user->update(['role' => 'member']);
            Session::flash('confirmed', 'your email has been successfully confirmed');

            return redirect(asset('/' . $lang . '/user' . '/' . $id . '/carpostlist'));
        } elseif ($user->role == 'member') {
            return redirect(asset('/' . $lang . '/user' . '/' . $id . '/carpostlist'));
        } else {
            return abort(322);
        }



    }

    public function store(Request $request, $lang, $id)
    {
        //
        if (Gate::Check('current-user', $id) == false) {
            return abort(403);

        }
        if (Gate::Check('post-limit') == true) {
            return abort(302);

        }
        $validator = Validator::make($request->all(), ['license' => 'required|min:4|max:30', 'brand' => 'required|min:2|max:20', 'doors' => 'required|numeric|min:2|max:10', 'price' => 'required|numeric|min:10|max:10000', 'model' => 'required|min:2|max:30', 'km' => 'numeric|max:900000', 'detail' => 'required|min:5|max:3000', 'photo1' => 'required|mimes:jpeg,bmp,png,jpg,gif', 'photo6' => 'mimes:jpeg,bmp,png,jpg,gif', 'photo7' => 'mimes:jpeg,bmp,png,jpg,gif', 'photo2' => 'required|mimes:jpeg,bmp,png,jpg,gif', 'year' => 'required|numeric|min:1920|max:2019', 'appliances' => 'max:333', 'photo3' => 'required|mimes:jpeg,bmp,png,jpg,gif', 'photo4' => 'required|mimes:jpeg,bmp,png,jpg,gif', 'engine' => 'required|max:30', 'photo5' => 'required|mimes:jpeg,bmp,png,jpg,gif', 'interior_color' => 'max:30', 'exterior_color' => 'required|max:30']);

        if ($validator->fails()) {
            return redirect('/' . $lang . '/user/' . $id . '/addcar_post')->withErrors($validator)->withInput();
        } else {
            $input = $request->all();
            $input['uploat_at'] = Carbon::now();
            $input['user_id'] = Auth::user()->id;
            $name1 = time() . '1.' . $request->file('photo1')->getClientOriginalExtension();
            Image::make($request->file('photo1')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name1));
            $input['photo1'] = $name1;

            $name2 = time() . '2.' . $request->file('photo2')->getClientOriginalExtension();
            Image::make($request->file('photo2')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name2));
            $input['photo2'] = $name2;

            $name3 = time() . '3.' . $request->file('photo3')->getClientOriginalExtension();
            Image::make($request->file('photo3')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name3));
            $input['photo3'] = $name3;

            $name4 = time() . '4.' . $request->file('photo4')->getClientOriginalExtension();
            Image::make($request->file('photo4')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name4));
            $input['photo4'] = $name4;

            $name5 = time() . '5.' . $request->file('photo5')->getClientOriginalExtension();
            Image::make($request->file('photo5')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name5));
            $input['photo5'] = $name5;

            $name6 = time() . '6.' . $request->file('photo6')->getClientOriginalExtension();
            Image::make($request->file('photo6')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name6));
            $input['photo6'] = $name6;

            $name7 = time() . '7.' . $request->file('photo7')->getClientOriginalExtension();
            Image::make($request->file('photo7')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name7));
            $input['photo7'] = $name7;


            $input['feature'] = 'Yes';
            Car::create($input);
            Session::flash('add_msg', 'New Car is successfully added');

            return redirect('/' . $lang . '/index');
        }
    }

    public function Carpostlist($lang, $id)
    {
        //find method id of user relate table cars wiht user_id field
        if (Gate::Check('current-user', $id) == false) {
            return abort(403);
        }
        $cars = Car::Where('user_id','=',$id)->orderBy('uploat_at','desc')->paginate(7);
        if(Auth::user()->role='preminum') {
            $carcount = Car::where('user_id', $id)->count();
            $visitcount = Car::where('user_id', $id)->sum('view_count');//sum of all car view count of this user
        }else{
            $carcount='';
            $visitcount='';
        }
        return view('front.adsuser.carlist', ['cars' => $cars,'carcount'=>$carcount,'visitcount'=>$visitcount]);


    }

    public function detail($lang, $id, $carid)
    {
        //check gate if user id is not current auth user id go to abort page
        if (Gate::Check('current-user', $id) == false) {
            return abort(403);
        }
        //find carrent user car by car id
        $car = User::find($id)->cars->find($carid);
        // this is for user if current user have not no post 222 error page will show
        if (empty($car)) {
            return abort(222);
        }
        return view('front.adsuser.detailcar', ['detail' => $car]);
    }

    public function edit_car($lang, $id, $carid)
    {

        if (Gate::Check('current-user', $id) == false) {
            return abort(403);
        }
        $edit_car = User::find($id)->cars->find($carid);
        if (empty($edit_car)) {
            return abort(222);
        }

        return view('front.adsuser.editcar', ['edit_car' => $edit_car]);
    }

    public function update(Request $request, $lang, $id, $carid)
    {
        //

        if (Gate::check('current-user', $id) === false) {
            abort(403);
        }
        $car = User::find($id)->cars->find($carid);
        if (empty($car)) {
            return abort(222);
        }

        $validator = Validator::make($request->all(), ['license' => 'required|min:4|max:30', 'brand' => 'required|min:2|max:20', 'doors' => 'required|numeric|min:2|max:10', 'price' => 'required|numeric|min:10|max:10000', 'model' => 'required|min:2|max:30', 'km' => 'numeric|max:900000', 'detail' => 'required|min:5|max:3000', 'photo1' => 'mimes:jpeg,bmp,png,jpg,gif', 'photo2' => 'mimes:jpeg,bmp,png,jpg,gif', 'photo6' => 'mimes:jpeg,bmp,png,jpg,gif', 'photo7' => 'mimes:jpeg,bmp,png,jpg,gif', 'year' => 'required|numeric|min:1920|max:2019', 'appliances' => 'max:333', 'photo3' => 'mimes:jpeg,bmp,png,jpg,gif', 'photo4' => 'mimes:jpeg,bmp,png,jpg,gif', 'engine' => 'required|max:30', 'photo5' => 'mimes:jpeg,bmp,png,jpg,gif', 'interior_color' => 'max:30', 'exterior_color' => 'required|max:30']);

        if ($validator->fails()) {
            return redirect('/' . $lang . '/user/' . Auth::user()->id . '/edit_car/' . $carid)->withErrors($validator)->withInput();
        }
        $input = $request->all();
        /*if input photo files is empty take photo name from database and set photo variables else take input file photo name and set to photo variables
        and copy photo from temp to the directory*/
        if (empty($request->file('photo1'))) {
            $photo1 = $car->photo1;
        } else {
            $name1 = time() . '1.' . $request->file('photo1')->getClientOriginalExtension();
            Image::make($request->file('photo1')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name1));
            $photo1 = $name1;
        }

        if (empty($request->file('photo2'))) {
            $photo2 = $car->photo2;
        } else {
            $name2 = time() . '2.' . $request->file('photo2')->getClientOriginalExtension();
            Image::make($request->file('photo2')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name2));
            $photo2 = $name2;

        }
        if (empty($request->file('photo3'))) {
            $photo3 = $car->photo3;
        } else {
            $name3 = time() . '3.' . $request->file('photo3')->getClientOriginalExtension();
            Image::make($request->file('photo3')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name3));
            $photo3 = $name3;

        }
        if (empty($request->file('photo4'))) {
            $photo4 = $car->photo4;
        } else {
            $name4 = time() . '4.' . $request->file('photo4')->getClientOriginalExtension();
            Image::make($request->file('photo4')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name4));
            $photo4 = $name4;

        }
        if (empty($request->file('photo5'))) {
            $photo5 = $car->photo5;
        } else {
            $name5 = time() . '5.' . $request->file('photo5')->getClientOriginalExtension();
            Image::make($request->file('photo5')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name5));
            $photo5 = $name5;

        }
        if (empty($request->file('photo6'))) {
            $photo6 = $car->photo6;
        } else {
            $name6 = time() . '6.' . $request->file('photo6')->getClientOriginalExtension();
            Image::make($request->file('photo6')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name6));
            $photo6 = $name6;

        }
        if (empty($request->file('photo7'))) {
            $photo7 = $car->photo7;
        } else {
            $name7 = time() . '7.' . $request->file('photo7')->getClientOriginalExtension();
            Image::make($request->file('photo7')->getRealPath())->resize(250, 250)->save(public_path('backend/images/carlist/' . $name7));
            $photo7 = $name7;

        }

        $input['uploat_at'] = Carbon::now();
        $input['photo1'] = $photo1;
        $input['photo2'] = $photo2;
        $input['photo3'] = $photo3;
        $input['photo4'] = $photo4;
        $input['photo5'] = $photo5;
        $input['photo6'] = $photo6;
        $input['photo7'] = $photo7;
        $input['feature'] = 'Yes';

        $car->update($input);
        Session::flash('edit_msg', 'Successfully updated');
        Session::flash('editid', $carid);

        return redirect('/' . $lang . '/index');

    }

    public function destroy($lang, $id, $carid)
    {
        //
        if (Gate::check('current-user', $id) == false) {
            abort(403);
        }
        $have_car = User::find($id)->cars->find($carid);
        if (empty($have_car)) {
            return abort(222);
        }
        $file_path = 'backend/images/carlist/';
        if (File::exists($file_path . $have_car->photo1)) File::delete($file_path . $have_car->photo1);
        if (File::exists($file_path . $have_car->photo2)) File::delete($file_path . $have_car->photo2);
        if (File::exists($file_path . $have_car->photo3)) File::delete($file_path . $have_car->photo3);
        if (File::exists($file_path . $have_car->photo4)) File::delete($file_path . $have_car->photo4);
        if (File::exists($file_path . $have_car->photo5)) File::delete($file_path . $have_car->photo5);
        if (File::exists($file_path . $have_car->photo6)) File::delete($file_path . $have_car->photo6);
        if (File::exists($file_path . $have_car->photo7)) File::delete($file_path . $have_car->photo7);
        $have_car->delete();
        Session::flash('delete_msg', 'Successfully deleted');

        return redirect('/' . $lang . '/user/' . $id . '/carpostlist');

    }

    public function profile($lang, $id)
    {
        if (Gate::check('current-user', $id) == false) {
            abort(403);
        }
        return view('front.adsuser.profile');
    }

    public function profile_edit($lang, $id)
    {
        if (Gate::check('current-user', $id) == false) {
            abort(403);
        }
        $profile = User::find($id);
        return view('front.adsuser.editprofile', ['profile' => $profile]);
    }

    public function edit_profile($lang, $id, Request $request)
    {
        if (Gate::check('current-user', $id) == false) {
            abort(403);
        }
        $profile = User::find($id);

        $input = $request->all();
        $messages = ['photo.mimes' => 'Must be png or gif in photo field', 'email.unique' => 'This has been already used Please choose another',];
        $validator = Validator::make($request->all(), ['photo' => 'mimes:png,jpg,jpeg,gif', 'phone' => 'required|max:11|min:8', 'town' => 'required|max:120', 'name'=>'max:23','address' => 'max:120', 'email' => 'required|unique:users,email,' . $id], $messages);
        if ($validator->fails()) {
            return redirect('/' . $lang . '/user/' . Auth::user()->id . '/edit_profile')->withErrors($validator)->withInput();
        }
        if (empty($request->file('photo'))) {
            $photo = $profile->photo;
        } else {
            $photo = $request->file('photo')->getClientOriginalName();
            Image::make($request->file('photo')->getRealPath())->resize(250, 250)->save(public_path('backend/images/memberlist/' . $photo));
        }
        $input['photo'] = $photo;
        $profile->update($input);
        Session::flash('edit_msg', 'Your profile was successfully updated');

        return redirect('/' . $lang . '/user/' . $id . '/profile');

    }

    public function show_psw($lang, $id)
    {
        if (Gate::check('current-user', $id) == false) {
            abort(403);
        }
        return view('front.adsuser.pswchange');
    }

    public function psw_change($lang, $id, Request $request)
    {
        if (Gate::check('current-user', $id) == false) {
            abort(403);
        }
        if (Hash::check($request->old_psw, Auth::user()->password)) {

        } else {
            Session::flash('old_psw', 'Your old password is wrong');
            return redirect('/' . $lang . '/user/' . $id . '/psw_change')->withInput();

        }
        $messages = ['password.min' => 'Password must have at least 5 characters'];
        $validator = Validator::make($request->all(), ['password' => 'min:5'], $messages);
        if ($validator->fails()) {
            return redirect('/' . $lang . '/user/' . Auth::user()->id . '/psw_change')->withInput()->withErrors($validator);
        }
        $tochange = User::find($id);
        $tochange->update(['password' => Hash::make($request->password)]);
        Session::flash('change_psw', 'Your password was successfully updated');
        return redirect('/' . $lang . '/user/' . $id . '/profile');


    }

}
