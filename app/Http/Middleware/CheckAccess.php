<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Helpers\Api;
use App\Http\Helpers\RestCurl;
use Exception;

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
            $token = $request->session()->get('access_token');
            // $token = $tokens->access_token;

            $r =  (object) RestCurl::exec('GET',env('URL_SERVICE_ACCOUNT').'/auth/check-token',[],$token);

            if($r->status == 200 and $r->data->message == 'valid_token')
            {
                response()->json(Api::format($r->data->status,[$r->data->data],$r->data->message), 200);

            } 
            elseif($r->data->message == 'refresh_token') // refresh_token 
            {   

                $refresh_token = $r->data->data->refresh_token;
                $r =  (object) RestCurl::exec('GET',env('URL_SERVICE_ACCOUNT').'/auth/check-token',[],$refresh_token);
                $request->session()->put('access_token', $refresh_token);
            }   
        
        } catch (\Exception $e) {
            return response()->json(Api::format('0',[],$e->getMessage()), 500);
        }
        
        // set session
        session(['user' => (array) $r->data->data]);

        return $next($request);
    }
}