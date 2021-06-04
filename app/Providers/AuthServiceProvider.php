<?php

namespace App\Providers;

use App\Models\UserType;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('patient', function($user){         
            $userType = DB::table('user_types')->where('type_id',1)->where('user_id',$user->id)->get();
            return ( sizeof($userType) != 0);
        });
        
        $this->registerPolicies();
        Gate::define('admin', function($user){         
            $userType = DB::table('user_types')->where('type_id',2)->where('user_id',$user->id)->get();
            return ( sizeof($userType) != 0);
        });

        Gate::define('doctor', function($user){         
            $userType = DB::table('user_types')->where('type_id',3)->where('user_id',$user->id)->get();
            return ( sizeof($userType) != 0);
        });
                                                                       
    }
}
