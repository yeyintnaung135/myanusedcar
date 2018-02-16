<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate $gate
     * @return void
     * $user variable is current user by Auth
     * gate auto auto prepend current user
     * update-user and delete-user are call ability
     * $ability is dedicate to update-user and delete-user
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        //$user is dedicate current auth user
        //this gate is for usercarpostcontroller current user cannot to see others user post
        $gate->define('is-admin',function($user){
            //this is current cannot access to the dashboard and do activity if he is not admin
            return($user->role=='admin');
        });
        $gate->define('current-user', function ($user, $id) {
            //it is check current user u can use gate's foruser method instead of this
            //$user->id is current user id $id is request user id
            return (($user->id == $id));

        });
        $gate->define('post-limit', function ($user) {

            $count=count($user->cars);
            return ($count >= $user->post_limit);

        });
        $gate->define('update-user', function ($user, $edit_mem) {
            $e_u = $user->permission;
            return (($user->id == $edit_mem->id) OR (($user->role === 'hr_manager') AND (in_array('edit', $e_u))));

        });
        $gate->define('update-car', function ($user) {
            $e_c = $user->permission;

            return $user->role === 'manager';

        });
        $gate->define('delete-user', function ($user) {
            $d_u = $user->permission;

            return (($user->role === 'hr_manager') AND (in_array('delete', $d_u)));

        });
        $gate->define('delete-car', function ($user) {
            $d_c = $user->permission;

            return (($user->role === 'manager') AND (in_array('delete', $d_c)));
        });
        $gate->define('delete-sub', function ($user) {


            return ($user->role === 'admin');
        });
        $gate->before(function ($user, $ability) {
            //this before method is run firstly other define method
            if ($user->role == 'admin') {
                return true;
            }
        });

        //
    }
}
