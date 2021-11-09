<?php

namespace App\Providers;

use App\Contactmails;
use App\News;
use App\Subscribe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Car;
use App\User;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //view share is for passing data for all views 'year' is name to know from view and $year is variable to pass to view
        $year = Car::where('feature','yes')->distinct()->orderBy('year','asc')->pluck('year');
        view()->share('year', $year);
        $last = Car::where('feature','yes')->orderBy('year', 'desc')->limit('2')->get();
        view()->share('last', $last);
        $hot_type = Car::orderBy('view_count', 'desc')->limit('2')->get();
        view()->share('hot_type', $hot_type);
        $new = News::orderBy('uploat_at', 'desc')->limit('2')->get();
        view()->share('latest_new', $new);

        $hottest = Car::where('feature','yes')->orderBy('view_count', 'desc')->limit('1')->get();
        view()->share('hottest', $hottest);
        $brands = Car::where('feature','yes')->groupBy('brand')->get();
        view()->share('brands', $brands);
        $count = Car::count();
        view()->share('count', $count);
        $tran = Car::where('feature','yes')->distinct()->pluck('transmittion');
        view()->share('trans', $tran);
        $type = Car::where('feature','yes')->distinct()->pluck('body_type');
        view()->share('types', $type);
        //this is for admin pannel alert email
         $count_mail=Subscribe::where('reading','unread')->count();
        view()->share('count',$count_mail);

        $contact_mail_count=Contactmails::where('reading','unread')->count();
        view()->share('contact_count',$contact_mail_count);

        $email = Subscribe::where('reading','unread')->get();
        view()->share('email', $email);

        $contact_mail = Contactmails::where('reading','unread')->get();
        view()->share('contact_mail_noti', $contact_mail);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
