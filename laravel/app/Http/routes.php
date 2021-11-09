<?php
//middleware lang for filter languages en and mm
Route::group(['middleware' => ['web', 'lang']], function () {

    Route::get('/', function () {
        return redirect('/mm/index');
    });
    Route::get('/{lang}/index','Carfrontcontroller@index');
    Route::get('/index', function () {
        return redirect('/mm/index');
    });
    Route::get('/{lang}/index', 'Carfrontcontroller@index');
    Route::get('/{lang}/detail/{car}', ['as' => 'detail', 'uses' => 'Carfrontcontroller@detail']);
    Route::get('/{lang}/result_brand/{brand}', 'Carfrontcontroller@result_brand');
    Route::get('/{lang}/result_year/{year}', 'Carfrontcontroller@result_year');
    Route::get('/{lang}/result_type/{type}', 'Carfrontcontroller@result_type');
    Route::get('/{lang}/best_price', 'Carfrontcontroller@best_price');
    Route::get('/{lang}/popular', 'Carfrontcontroller@popular');
    Route::get('/{lang}/latest', 'Carfrontcontroller@latest');
    Route::get('/{lang}/see_all', 'Carfrontcontroller@see_all');
    Route::get('/{lang}/search_result/', 'Carfrontcontroller@search');
    Route::get('/{lang}/about/', 'Carfrontcontroller@about');
    Route::get('/{lang}/contact-us/', 'Carfrontcontroller@contact');
    Route::get('/{lang}/newlist/', 'newfrontcontroller@index');
    Route::get('/{lang}/detailnew/{new}', 'newfrontcontroller@detail');
    Route::get('/send', 'ContactController@send');
    Route::get('/{lang}/user/register', function () {
        return view('front.registerfront',['title'=>'r']);
    });
    Route::post('/{lang}/user/register', 'Auth\AuthController@register');

    Route::get('/{lang}/user/login', function () {
        return view('front.login',['title'=>'l']);
    });
    Route::post('/{lang}/user/login','Auth\AuthController@login');
    /*this route is for when ads user is logined i cannot redirect with current user id from authcontroller so
    i set this route for insert current user id ,this is only for the moment when user is logined and redirect
    Logic:: redirect user/carpostlist from auth controller and this route redirect user/id(current user id)/carpostlist
    */
    Route::get('/user/carpostlist', function () {
        if(Session::has('locale')) {
            $lang_path = Session::get('locale');
        }
        else{
            $lang_path='mm';
        }
        $id = Auth::user()->id;
        return redirect('/' . $lang_path . '/user/' . $id . '/carpostlist');
    });
    //end
    Route::get('/{lang}/user/{id}/addcar_post', 'UsercarpostController@create');
    Route::post('/{lang}/user/{id}/addcar_post', 'UsercarpostController@store');
    Route::get('/{lang}/user/{id}/carpostlist', 'UsercarpostController@Carpostlist');
    Route::get('/{lang}/user/{id}/detail_car/{carid}', 'UsercarpostController@detail');
    Route::get('/{lang}/user/{id}/edit_car/{carid}', 'UsercarpostController@edit_car');
    Route::patch('/{lang}/user/{id}/editcar/{carid}', 'UsercarpostController@update');
    Route::get('/{lang}/user/{id}/delete_car/{carid}', 'UsercarpostController@destroy');
    Route::get('/{lang}/user/{id}/profile', 'UsercarpostController@profile');
    Route::get('/{lang}/user/{id}/edit_profile', 'UsercarpostController@profile_edit');
    Route::patch('{lang}/user/{id}/edit_profile', 'UsercarpostController@edit_profile');
    Route::get('/{lang}/user/{id}/psw_change', 'UsercarpostController@show_psw');
    Route::post('{lang}/user/{id}/psw_change', 'UsercarpostController@psw_change');
    Route::get('{lang}/user/confirm_email','UsercarpostController@confirm_email_form');
    Route::get('{lang}/user/confirm_sent/{id}/{code}','UsercarpostController@getconfirm');

    Route::get('abort', 'Carcontroller@abort');
    Route::get('banned',function (){
        return abort(405);
    });
});


//add middleware web for error variable
Route::group(['middleware' => ['web']], function () {
    Route::get('/subscribe', 'Carfrontcontroller@subscribe');
    Route::get('/dashboard/contact', 'Carcontroller@Contactlist');
    Route::get('/dashboard/contact-detail/{id}', 'Carcontroller@Contactdetail');
    Route::get('/dashboard/contact-delete/{id}', 'Carcontroller@Contactdelete');

    Route::auth();
    Route::get('/dashboard', 'Carcontroller@index');
    Route::get('/dashboard/carlist', 'Carcontroller@carlist');
    Route::get('/dashboard/detail_car/{id}', 'Carcontroller@show');
    Route::get('/dashboard/detail_new/{id}', 'Carcontroller@detailnew');
    Route::get('/dashboard/edit_car/{id}', 'Carcontroller@edit');
    Route::patch('/dashboard/editcar/{id}', 'Carcontroller@update');
    Route::get('/dashboard/delete_car/{id}', 'Carcontroller@destroy');
    Route::get('/dashboard/add_newcar', 'Carcontroller@create');
    Route::post('/dashboard/add_newcar', 'Carcontroller@store');
    Route::get('/dashboard/new_list', 'Carcontroller@newlist');
    Route::get('/dashboard/add_new_new', 'Carcontroller@createnew');
    Route::post('/dashboard/add_new_new', 'Carcontroller@storenew');
    Route::get('/dashboard/edit_new/{id}', 'Carcontroller@editnew');
    Route::patch('/dashboard/edit_new/{id}', 'Carcontroller@updatenew');
    Route::get('/dashboard/delete_new/{id}', 'Carcontroller@destroynew');
    Route::get('/dashboard/member_list', 'membercontroller@index');
    Route::get('/dashboard/add_newmember', 'membercontroller@create');
    Route::post('/dashboard/add_newmember', 'membercontroller@store');
    Route::get('/dashboard/edit_member/{id}', 'membercontroller@edit');
    Route::get('/dashboard/profile', 'membercontroller@profile');
    Route::get('/dashboard/detail_member/{id}', 'membercontroller@show');
    Route::patch('/dashboard/edit_member/{id}', 'membercontroller@update');
    Route::get('/dashboard/subscriber', 'Carcontroller@showsub');
    Route::get('/dashboard/delete_member/{id}', 'Carcontroller@destroymem');
    Route::get('/dashboard/delete_subscribe/{id}', 'Carcontroller@delsub');

});








