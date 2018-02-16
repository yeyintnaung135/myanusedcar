<?php

namespace App\Http\Controllers;


use App\Car;
use App\User;
use App\Contactmails;
use App\Events\NotiEvent;
use App\News;
use App\Subscribe;
use App\Website;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Carcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //authenciation
        $this->middleware('auth');

    }

//start car section
    public function index()
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $mem_counts=User::count();
        $sub_counts=Subscribe::count();
        $new_counts=News::count();
        $cnt_counts=Contactmails::count();
        $mem_ban_counts=User::where('role','!=','member')->count();
        $car_ban_counts=Car::where('feature','!=','Yes')->count();
        $visit_counts=Website::all();

        return view('admin.index',['mem_counts'=>$mem_counts,'car_ban_counts'=>$car_ban_counts,'v_c'=>$visit_counts,'sub_counts'=>$sub_counts,'new_counts'=>$new_counts,'mem_ban_counts'=>$mem_ban_counts,'cnt_counts'=>$cnt_counts]);

    }

    public function carlist()
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }

        $cars = Car::all();

        return view('admin.carlist', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Gate::check('is-admin') === false) {
            abort(403);
        }


        return view('admin.addcar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $messages = ['brand.min' => 'Must be :attribute field at least 2', 'detail.min' => 'Must be :attribute field at least 5', 'detail:max' => 'Must be :attribute field at max 333', 'year.max' => 'Must be :attribute at max 4', 'photo1.mimes' => 'Must be png o r gif in brand logo field', 'appliances.max' => 'Must be :attribute field at max 333', 'brand.max' => 'Must be :attribute field at max 20', 'model' => 'Must be :attribute field at least 2', 'photo2.mimes' => 'Must be photo in Front photo field', 'photo3.mimes' => 'Must be photo in Back photo field', 'photo4.mimes' => 'Must be photo in Engine photo field', 'photo5.mimes' => 'Must be photo in Inner photo field', 'year' => 'Year must be at least 4'];
        $validator = Validator::make($request->all(), ['brand' => 'required|min:2|max:20', 'price' => 'required|min:1|max:20', 'model' => 'required|min:2|max:30', 'detail' => 'required|min:5|max:333', 'photo1' => 'required|mimes:jpeg,bmp,png,jpg,gif', 'photo2' => 'required|mimes:jpeg,bmp,png,jpg,gif', 'year' => 'max:4', 'appliances' => 'max:333', 'photo3' => 'required|mimes:jpeg,bmp,png,jpg,gif', 'photo4' => 'required|mimes:jpeg,bmp,png,jpg,gif', 'engine' => 'required|max:30', 'photo5' => 'required|mimes:jpeg,bmp,png,jpg,gif', 'year' => 'min:4', 'interior_color' => 'max:30', 'exterior_color' => 'required|max:30', 'license' => 'required', 'km' => 'max:30'], $messages);


        if ($validator->fails()) {
            return redirect('/dashboard/add_newcar')->withErrors($validator)->withInput();
        } else {
            $input = $request->all();
            $input['uploat_at'] = Carbon::now();
            $input['user_id'] = Auth::user()->id;

            $request->file('photo1')->move(base_path() . '/public/backend/images/carlist', $request->file('photo1')->getClientOriginalName());
            $input['photo1'] = $request->file('photo1')->getClientOriginalName();
            $request->file('photo2')->move(base_path() . '/public/backend/images/carlist', $request->file('photo2')->getClientOriginalName());
            $input['photo2'] = $request->file('photo2')->getClientOriginalName();
            $request->file('photo3')->move(base_path() . '/public/backend/images/carlist', $request->file('photo3')->getClientOriginalName());
            $input['photo3'] = $request->file('photo3')->getClientOriginalName();
            $request->file('photo4')->move(base_path() . '/public/backend/images/carlist', $request->file('photo4')->getClientOriginalName());
            $input['photo4'] = $request->file('photo4')->getClientOriginalName();
            $request->file('photo5')->move(base_path() . '/public/backend/images/carlist', $request->file('photo5')->getClientOriginalName());
            $input['photo5'] = $request->file('photo5')->getClientOriginalName();
            $input['feature'] = 'Yes';
            Car::create($input);
            Session::flash('add_msg', 'New Car is successfully added');
            return redirect('dashboard/carlist');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if (Gate::check('is-admin') === false) {
            abort(403);
        }

        $car = Car::find($id);
        $owner=$car->owner;

        return view('admin.detailcar', ['detail' => $car,'owner'=>$owner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $edit_car = Car::findOrFail($id);

        return view('admin.editcar', ['edit_car' => $edit_car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $car = Car::findOrFail($id);


        $validator = Validator::make($request->all(), ['license'=>'required|min:4|max:30','brand' => 'required|min:2|max:20', 'doors' => 'required|numeric|min:2|max:10', 'price' => 'required|numeric|min:10|max:10000', 'model' => 'required|min:2|max:30', 'km' => 'numeric|max:900000', 'detail' => 'required|min:5|max:333', 'photo1' => 'mimes:jpeg,bmp,png,jpg,gif', 'photo2' => 'mimes:jpeg,bmp,png,jpg,gif','photo6' => 'mimes:jpeg,bmp,png,jpg,gif','photo7' => 'mimes:jpeg,bmp,png,jpg,gif', 'year' => 'required|numeric|min:1920|max:2019', 'appliances' => 'max:333', 'photo3' => 'mimes:jpeg,bmp,png,jpg,gif', 'photo4' => 'mimes:jpeg,bmp,png,jpg,gif', 'engine' => 'required|max:30', 'photo5' => 'mimes:jpeg,bmp,png,jpg,gif', 'interior_color' => 'max:30', 'exterior_color' => 'required|max:30']);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
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

        $car->update($input);
        Session::flash('edit_msg', 'Successfully updated');
        return redirect('dashboard/carlist');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $delete = Car::findOrFail($id);

        $file_path = 'backend/images/carlist/';
        if (File::exists($file_path . $delete->photo1)) File::delete($file_path . $delete->photo1);
        if (File::exists($file_path . $delete->photo2)) File::delete($file_path . $delete->photo2);
        if (File::exists($file_path . $delete->photo3)) File::delete($file_path . $delete->photo3);
        if (File::exists($file_path . $delete->photo4)) File::delete($file_path . $delete->photo4);
        $delete->delete();
        Session::flash('delete_msg', 'Successfully deleted');

        return redirect('dashboard/carlist');

    }
    //end car section


    //start news section
    //to show listing page of news
    public function newlist()
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }

        $newlist = News::all();
        return view('admin.newlist', ['news' => $newlist, 'name' => $newlist]);
    }

    public function detailnew($id)
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $new = News::findorfail($id);
        return view('admin.detailnew', ['detail' => $new, 'name' => $new]);
    }

    //to show create new page
    public function createnew()
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $news = News::all();

        return view('admin.addnew', ['news' => $news]);
    }

    //to store new
    public function storenew(Request $request)
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $messages = ['name.min' => 'Must be :attribute field at least 5 ', 'description' => 'Must be :attribute field at least 15', 'photo.mimes' => 'Must be photo in photo field'];

        $validator = Validator::make($request->all(), ['name' => 'min:5', 'description' => 'min:15', 'photo' => 'mimes:jpeg,bmp,png,jpg', 'photo' => 'mimes:jpeg,bmp,png,jpg'], $messages);
        if ($validator->fails()) {
            return redirect('/dashboard/add_new_new')->withErrors($validator)->withInput();
        } else {
            $input = $request->all();
            $input['uploat_at'] = Carbon::now();
            $request->file('photo')->move(base_path() . '/public/backend/images/newlist', $request->file('photo')->getClientOriginalName());
            $input['photo'] = $request->file('photo')->getClientOriginalName();


            News::create($input);
            Session::flash('add_msg', 'New new is successfully added');

            return redirect('dashboard/new_list');
        }
    }

//to show edit new form
    public function editnew($id)
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $edit_new = News::findOrFail($id);

        return view('admin.editnew', ['edit_new' => $edit_new]);
    }

    //for edit new query
    public function updatenew(Request $request, $id)
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }

        $new = News::findOrFail($id);

        $messages = ['name.min' => 'Must be :attribute field at least 5 ', 'description' => 'Must be :attribute field at least 15', 'photo.mimes' => 'Must be photo in photo field'];

        $validator = Validator::make($request->all(), ['name' => 'min:5', 'description' => 'min:15', 'photo' => 'mimes:jpeg,bmp,png,jpg', 'photo' => 'mimes:jpeg,bmp,png,jpg'], $messages);
        if ($validator->fails()) {
            return redirect('/dashboard/edit_new/' . $id)->withErrors($validator)->withInput();
        }
        $input = $request->all();
        /*if input photo files is empty take photo name from database and set photo variables else take input file photo name and set to photo variables
        and copy photo from temp to the directory*/
        if (empty($request->file('photo'))) {
            $photo = $new->photo;
        } else {
            $photo = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(base_path() . '/public/backend/images/newlist', $request->file('photo')->getClientOriginalName());
        }


        $input['uploat_at'] = Carbon::now();
        $input['photo'] = $photo;

        $new->update($input);
        Session::flash('edit_msg', 'Successfully updated');

        return redirect('dashboard/new_list');

    }

    //to delete
    public function destroynew($id)
    {
        //
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $delete = News::findOrFail($id);
        $file_path = 'backend/images/newlist/';
        if (File::exists($file_path . $delete->photo)) File::delete($file_path . $delete->photo);
        $delete->delete();
        Session::flash('delete_msg', 'Successfully deleted');

        return redirect('dashboard/new_list');

    }

    public function destroymem($id)
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $user = User::find($id);
        $photo = $user->cars;
        foreach ($photo as $ph) {
            $file_path = 'backend/images/carlist/';

            if (File::exists($file_path . $ph->photo1)) File::delete($file_path . $ph->photo1);
            if (File::exists($file_path . $ph->photo2)) File::delete($file_path . $ph->photo2);
            if (File::exists($file_path . $ph->photo3)) File::delete($file_path . $ph->photo3);
            if (File::exists($file_path . $ph->photo4)) File::delete($file_path . $ph->photo4);
            if (File::exists($file_path . $ph->photo5)) File::delete($file_path . $ph->photo5);


        }
        $user->delete();
        Session::flash('delete_msg', 'Successfully deleted');
        return redirect()->back();
    }

//end news section
    public function abort()
    {
        return abort(403);
    }

    //subscribe email section
    //this function for to input subscribe email to database
    public function showsub()
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $subscribe = Subscribe::all();
        return view('admin.subscriberlist', ['subscribe' => $subscribe]);
    }


    public function delsub($id)
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }

        Subscribe::find($id)->delete();
        Session::flash('delete_msg', 'Successfully deleted');
        return redirect()->back();

    }

    //end subscribe section
    public function Contactlist()
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $contact = Contactmails::all();
        return view('admin.contactmails', ['contact' => $contact]);

    }

    public function Contactdetail($id)
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $unread = Contactmails::findOrfail($id);
        $unread->update(['reading' => 'read']);
        $cdetail = Contactmails::findOrfail($id);
        return view('admin.contactdetail', ['detail' => $cdetail]);

    }

    public function Contactdelete($id)
    {
        if (Gate::check('is-admin') === false) {
            abort(403);
        }
        $cdelete = Contactmails::findOrfail($id);
        $cdelete->delete();
        Session::flash('delete_msg', 'Successfully deleted');
        return redirect(asset('/dashboard/contact'));
    }


}
