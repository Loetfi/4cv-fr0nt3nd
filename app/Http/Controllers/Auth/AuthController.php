<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Helpers\Api;
use App\Http\Helpers\RestCurl;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        
        $authSession = $this->findOrCreateUser($user, $provider);

        if ($authSession > 0) {
            $param = array(
                'email' => $user->email,
                'password' => 12345678
                 );
            
            $login = (object) RestCurl::exec('POST','http://localhost/svc-account/public/auth/login',$param);
            
            if ($login->status == 200 ) {
                $loginSession = (array) $login->data;
                session(['user' => $loginSession]);
            } else {
                return redirect('/');
            }
        }

        return redirect('profile');
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authSession = (object) RestCurl::exec('POST','http://localhost/svc-account/public/auth/check-user-provider',['provider_id' => $user->id]);
        dd($authSession);
        if ($authSession->data->data->user) {
            return $authSession;
        } else {

            $data = [
                'fullname'      => $user->name,
                'email'         => $user->email,
                'avatar'        => $user->avatar,
                'provider'      => $provider,
                'provider_id'   => $user->id,
                'password'      => '12345678',
                'confirm_password'=> '12345678'
            ];

            $authUser = (object) RestCurl::exec('POST','http://localhost/svc-account/public/auth/register',$data);
            return $authSession = (array) $authUser->data->data->user;
        }
    }

    public function login()
    {
        try {
            $param = array(
                'email' => $user->email,
                'password' => 12345678
                 );
            
            $login =  (object) RestCurl::exec('POST','http://localhost/svc-account/public/auth/login',$param);

            if ($login->status == 200 ) {
                $loginSession = (array) $login->data->data;
                session(['user' => $loginSession]);
            } else {
                return redirect('/');
            }
        } catch (\Exception $e) {
            return response()->json(Api::format('0',['message'=>$e->getMessage()],'Error'), 500);
        }
    }

    public function logout()
    {
        try {
            $token  = session()->get('access_token');
            $r =  (object) RestCurl::exec('GET','http://localhost/svc-account/public/auth/logout',[],$token);

        } catch (\Exception $e) {
            return response()->json(Api::format('0',['message'=>$e->getMessage()],'Error'), 500);
        }

        return response()->json(Api::format('1',['message'=> $r->message], 'Success'),200);
    }   
}