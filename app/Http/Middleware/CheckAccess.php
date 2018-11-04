<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Helpers\Api;
use App\Http\Helpers\RestCurl;

class CheckAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $token = session()->get('access_token');
<<<<<<< refs/remotes/origin/dev
            // $valid = $request->header('Authorization','Bearer '.$token);
            $r =  (object) RestCurl::exec('GET',env('URL_SERVICE_ACCOUNT').'/auth/check-token',[],$token);
            // dd($r->status);
=======

            $r =  (object) RestCurl::exec('GET','http://localhost/svc-account/public/auth/check-token',[],$token);
            dd($r);
>>>>>>> session login
            if($r->data->status !== '1')
            {
                return response()->json(Api::format($r->data->status,[$r->data->data],$r->data->message), 200);
            } 
            else if($r->status == 200) // refresh_token 
            {
                $refresh_token = $r->data->data->refresh_token;
                $r =  (object) RestCurl::exec('GET',env('URL_SERVICE_ACCOUNT').'/auth/check-token',[],$refresh_token);
                session(['refresh_token'=>$refresh_token]);
            }   
        
        } catch (\Exception $e) {
            return response()->json(Api::format('0',[],$e->getMessage()), 500);
        }
        
        // set session
        session( (array) $r->data->data->user);

        return $next($request);
    }
}
