<?php

namespace App\Http\Controllers\Auth;

use App\Http\Helpers\Api;
use App\Http\Helpers\RestCurl;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        try {
            return Socialite::driver($provider)->redirect();
        } catch (\Exception $e) {
            session()->flash('flash_notification',['type'=>'danger','message'=>'Terjadi kesalahan']);
                
            return redirect('/');
        }
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
        
        // cek apakah user dengan email sosmed tsb sudah pernah ada atau belum.
        $authSession = $this->findOrCreateUser($user, $provider);
        // if(count($authSession) > 0) {
        if ($authSession) {
            // jika ada
            $param = array(
                'email' => $authSession->Email,
                'password' => '4cv-p44sw0rd'
            );
            // maka diloginkan langsung
            $login = (object) RestCurl::exec('POST',env('URL_SERVICE_ACCOUNT').'/auth/login',$param);
            
            if ($login->status == 200 ) {
                // dijadikan ke session dengan array user
                $access_token = $login->data->data->access_token;
                
                $r =  (object) RestCurl::exec('GET',env('URL_SERVICE_ACCOUNT').'/auth/check-token',[],$access_token);

                session([
                    'access_token' => $access_token,
                    'user' => (array) $r->data->data
                ]);

                session()->flash('flash_notification',['type'=>'success','message'=>'Berhasil Login']);
                return redirect('/');

            } else {

                session()->flash('flash_notification',['type'=>'danger','message'=>'Silahkan coba lagi']);
                
                return redirect('/');
            
            }
        }
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
        $authSession = (object) RestCurl::exec('POST',env('URL_SERVICE_ACCOUNT').'/auth/check-user-provider',['email' => $user->email]);

        if (!empty($authSession->data->data->Email)) {
            
            return (object)$authSession->data->data;

        } else {

            $data = [
                'fullname'      => $user->name,
                'email'         => $user->email,
                'avatar'        => $user->avatar,
                'provider'      => $provider,
                'provider_id'   => $user->id,
                'password'      => '4cv-p44sw0rd',
                'confirm_password'=> '4cv-p44sw0rd',
                'is_active'     => 1
            ];

            $authUser = (object) RestCurl::exec('POST',env('URL_SERVICE_ACCOUNT').'/auth/register',$data);
            return $authSession = (object) $authUser->data->data;
        }
    }

    /**
    * @param email required
    * @param password required
    * @return json success login, your account its not active, email or password wrong
    */
    public function login(Request $request)
    {
        try {
            $param = array(
                'email' => $request->email,
                'password' => $request->password,
            );
            
            $login =  (object) RestCurl::exec('POST',env('URL_SERVICE_ACCOUNT').'/auth/login',$param);
            // dd($login->data->message);
            if ($login->status == 200 ) {
                // success login
                $access_token = $login->data->data->access_token;
                $r =  (object) RestCurl::exec('GET',env('URL_SERVICE_ACCOUNT').'/auth/check-token',[],$access_token);

                session([
                    'access_token'=>$access_token,
                    'user' => (array) $r->data->data
                ]);
                
                session()->flash('flash_notification',['type'=>'success','message'=>'Berhasil login']);

                return response()->json(Api::format('1',[],'Success login'), 200);
            } else {
                // 2 condition, account not active or password wrong
                return response()->json(Api::format('0',[],$login->data->message), 200);
            
            }
        } catch (\Exception $e) {

            return response()->json(Api::format('0',[],$e->getMessage()), 500);
        
        }
    }

    public function logout()
    {
        try {
            $token  = session()->get('access_token');
            $r =  (object) RestCurl::exec('GET', env('URL_SERVICE_ACCOUNT').'/auth/logout',[],$token);
            // dd($r);

        } catch (\Exception $e) {
            return response()->json(Api::format('0',[],$e->getMessage()), 500);
        }
        // session()->flash('status', 'Silahkan coba kembali.');
        session()->flush();
        return redirect('/');
    }   
}
