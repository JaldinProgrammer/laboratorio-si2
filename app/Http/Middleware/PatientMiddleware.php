<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserType;
use Illuminate\Support\Facades\Auth;
class PatientMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $usuario = UserType::where('type_id',1)->where('user_id',Auth::user()->id)->get();
       if(sizeof($usuario)!=0) // if it's not empty
        return $next($request);
        return redirect()->back();
    }
}
