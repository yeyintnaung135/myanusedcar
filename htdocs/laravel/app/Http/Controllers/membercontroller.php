<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class membercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    $this->middleware('auth');

    }

    public function index()
    {
        //

        $memberlist=User::all();
        return view('admin.memberlist',['members'=>$memberlist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addmember');
    }
    //show profile logined staff or memberr or admin
    public function profile()
    {
        //this function show staff's profile



        return view('admin.profile');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messages=['name.min'=>'Must be :attribute field at least 2','photo.mimes'=>'Must be photo in Outer photo field'];
        $validator=Validator::make($request->all(),['name'=>'min:3','photo'=>'mimes:jpeg,bmp,png,jpg'],$messages);
        if($validator->fails()){
            return redirect('/dashboard/add_newcar')->withErrors($validator)->withInput();
        }else{
            $input=$request->all();
            $request->file('photo')->move(base_path().'/public/backend/images/memberlist',$request->file('photo')->getClientOriginalName());
            $input['photo']=$request->file('photo')->getClientOriginalName();



            User::create($input);
            Session::flash('add_msg','New member is successfully added');

            return redirect('dashboard/member_list');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $member=User::findorfail($id);
        return view('admin.memberdetail',['detail'=>$member]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $edit_mem=User::findOrFail($id);
        //gate is from authorization of authserviceprovider
        if(Gate::check('update-user',$edit_mem)===false){
            abort(403);
        }

        return view('admin.editmember',['edit_mem'=>$edit_mem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $member=User::findOrFail($id);
        //it is authorization from authserviceprovider
        if(Gate::check('update-user',$member)===false){
            abort(403);
        }
        $messages=['name.min'=>'Must be :attribute field at least 2','photo.mimes'=>'Must be photo in Outer photo field'];
        $validator=Validator::make($request->all(),['name'=>'min:3','photo'=>'mimes:jpeg,bmp,png,jpg'],$messages);

        if($validator->fails()){
            return redirect('/dashboard/edit_member/'.$id)->withErrors($validator)->withInput();
        }
        $input=$request->all();
        /*if input photo files is empty take photo name from database and set photo variables else take input file photo name and set to photo variables
        and copy photo from temp to the directory*/
        if(empty($request->file('photo')))
        {
            $photo=$member->photo;
        }
        else
        {
            $photo=$request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(base_path().'/public/backend/images/memberlist',$request->file('photo')->getClientOriginalName());
        }


        $input['uploat_at']=Carbon::now();
        $input['photo']=$photo;


        $member->update($input);
        Session::flash('edit_msg','Successfully updated');

        return redirect('dashboard/member_list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $delete=User::findOrFail($id);
        if(Gate::check('delete-user')===false){
            abort(403);
        }
        $file_path='backend/images/memberlist/';
        if(File::exists($file_path.$delete->photo))  File::delete($file_path.$delete->photo);

        $delete->delete();
        Session::flash('delete_msg','Successfully deleted');

        return redirect('dashboard/member_list');
    }
}
