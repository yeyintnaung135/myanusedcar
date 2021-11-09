<?php

namespace App\Http\Controllers;


use App\Car;
use App\User;
use App\Subscribe;
use App\Member;
use App\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Events\NotiEvent;


use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class Carfrontcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $both;//this variable is set to all function of this controller

    public function __construct()
    {
        /*
         * This is to check user was banned if he was banned his post are not to show in website so
         * set two table relation car and user and select where user is a member ,and car post are feature,
         */
        $this->both = DB::table('users')->join('car_list', 'users.id', '=', 'car_list.user_id')->where([['users.role', 'like', 'member'], ['feature', 'like', 'Yes']]);
    }

    public function index($langId)
    {
        //this cars list is last date post cars
        $car_list = $this->both->orderBy('uploat_at', 'desc')->limit('7')->get();
        $hot_cars = $this->both->orderBy('view_count', 'desc')->limit('20')->get();
        $cheap_cars = $this->both->WhereBetween('price', [0,120])->limit('16')->get();
        $count_cheap = count($cheap_cars);
        if (Session::has('vcount')) {
            /*this is for while user is visit to our website visit count is increate but he refresh the page again and
            again count will not increate again*/

        } else {
            DB::table('website')->increment('visit_counts');
            Session::put('vcount','added');
        }


        return view('front.car', ['cars' => $car_list, 'hot_cars' => $hot_cars, 'cheap_cars' => $cheap_cars, 'count_cheap' => $count_cheap]);
    }

    public function best_price()
    {
        $best_price = $this->both->WhereBetween('price', [0, 100])->paginate(10);
        return view('front.result', ['results' => $best_price]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*if u have 2 routes parameters in route u have to add both this two parameters ...if u dont add only only one param u will get error
    u have car parameter in yr routes ...when u use this in controller u get as carId
    */
    public function detail($langId, $carId)
    {
        /*this is temporary query because get method is return array
         so we cannot update query again when we use get method in this query directly*/

        $tmp_query_car = $this->both->where('car_list.id', '=', $carId);

        //if the return array of tmp query has no data otherwise empty return empty else continue follow

        if (!empty($tmp_query_car->get())) {

            $car = $tmp_query_car->get();

            foreach ($car as $c) {
            }
            if(Session::has('detailcount')){

            }
            else {
                //addone is to add 1 in view count
                $addone = $c->view_count + 1;
                $tmp_query_car->update(['view_count' => $addone]);
                Session::put('detailcount','addeddetail');
            }
            //select car brand to use in similar car
            $b = $c->brand;
            if (!empty($b)) {
                //here i am using eloquent relation instead of direct database relationship by using DB facade
                //this is because have a aproblem  in user town and address
                $owner = Car::find($carId)->owner;
            }
            //sim is for similar car with similar brand name but not itself so id is not equal to it's id
            $sim = $this->both->Where([['car_list.brand', $b], ['car_list.id', '!=', $carId]])->limit('12')->get();
            //using with method because to avoid illagel offset error
            return view('front.detail', ['each' => $car, 'owner' => $owner])->with('sim', $sim);
        } else {
            //405 is banned page
            return abort(405);
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function result_brand($langId, $brandId)
    {
        $result = $this->both->Where('car_list.brand', $brandId)->orderBy('car_list.id', 'desc')->paginate(10);
        return view('front.result', ['results' => $result, 'brandId' => $brandId]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function result_year($langId, $yearId)
    {
        //
        $result = $this->both->Where('car_list.year', $yearId)->orderBy('car_list.id', 'desc')->paginate(10);
        return view('front.result', ['results' => $result]);

    }

    public function result_type($langId, $typeid)
    {
        //
        $result = $this->both->Where('car_list.body_type', $typeid)->orderBy('car_list.id', 'desc')->paginate(8);
        return view('front.result', ['results' => $result, 'type' => $typeid]);

    }

    public function see_all($langId)
    {
        //
        $result = $this->both->orderBy('car_list.id', 'asc')->paginate(8);
        return view('front.result', ['results' => $result]);

    }

    public function popular($langId)
    {
        //
        $result = $this->both->orderBy('car_list.view_count', 'desc')->paginate(8);
        return view('front.result', ['results' => $result]);

    }

    public function latest($langId)
    {
        //
        $result = $this->both->orderBy('car_list.id', 'desc')->limit(70)->paginate(8);
        return view('front.result', ['results' => $result]);

    }

    public function Subscribe(Request $request)
    {
        $data['email'] = $request->email;
        $data['uploat_at'] = Carbon::now();

        $email = Subscribe::create($data);
       // event(new NotiEvent($email));
        Session::flash('subed','success');
        return redirect()->back();

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function search($langId, Request $request)
    {
        //request for form input
        //request for form input
        $search_input = $request->all();
        if (empty($search_input['brand'])) {
            //'%' mean any brand name
            $search_input['brand'] = '%';
        }
        if (empty($search_input['town'])) {
            //'%' mean any brand name
            $search_input['town'] = '%';
        }
        if (empty($search_input['year'])) {
            //'%' mean any year
            $search_input['year'] = '%';
        }
        if (empty($search_input['type'])) {
            //'%' mean any type
            $search_input['type'] = '%';
        }
        if (empty($search_input['price'])) {
            //'%' mean any type
            $price = [0, 1000000];
        } else {
            switch ($search_input['price']) {
                case "under100":
                    $price = [1, 100];
                    break;
                case "be100and200":
                    $price = [100, 200];
                    break;

                case "be200and300":
                    $price = [200, 300];
                    break;

                case "be300and400":
                    $price = [200, 300];
                    break;

                case "be400and500":
                    $price = [400, 500];
                    break;
                case "be500and1000000":
                    $price = [400, 500];
                    break;

            }


        };

        if (empty($search_input['transmittion'])) {
            $search_input['transmittion'] = '%';
        }
        $brand = $search_input['brand'];
        $town = $search_input['town'];
        $tran = $search_input['transmittion'];
        $year = $search_input['year'];
        $type = $search_input['type'];
        //you will see i am using database join here becz i cannot use eloquent relationship this can use only id base relationship so i used simple database join with DB facade
        $result = DB::table('users')->join('car_list', 'users.id', '=', 'car_list.user_id')->where([['car_list.feature', '=', 'Yes'],['users.role', 'like', 'member'],['users.town', 'like', $town], ['car_list.year', 'like', $year], ['car_list.transmittion', 'like', $tran], ['car_list.brand', 'like', $brand], ['car_list.body_type', 'like', $type]])->WhereBetween('price', $price)->paginate(10);
        return view('front.result', ['results' => $result]);

    }


    public function contact($langId)
    {

        return view('front.contact');

    }


}