<?php

namespace App\Http\Middleware;

use App\Models\Type;
use App\Models\UserType;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AdminMiddleware
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
       //
       $usuario = UserType::where('type_id',2)->where('user_id',Auth::user()->id)->get();
       if(sizeof($usuario)!=0) // if it's not empty
        return $next($request);
        return redirect()->back();
    }
}
