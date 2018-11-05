<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Helpers\Api;
use App\Http\Helpers\RestCurl;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('frontend.register.index_register');
    }

    /**
    * @param fullname string
    * @param email unique
    * @param password min 6, ConfirmPassword same Password
    * @param phone_number numeric
    * @return success redirect('profile')
    */
    public function store(Request $request)
    {
    	// dd($request->all());
    	$data_register = [
    		'fullname'			=> $request->fullname,
    		'email'				=> $request->email,
    		'password'      	=> $request->password,
            'confirm_password'	=> $request->confirm_password,
    		'phone_number' 		=> $request->phone_number
    	];

    	$authUser = (object) RestCurl::exec('POST',env('URL_SERVICE_ACCOUNT').'/auth/register',$data_register);
    	// dd($authUser);
    	if($authUser->status !== 200) {
    		dd($authUser);
    	} else {
	    	$authSession = (object) $authUser->data->data;
	    	
	    	if ($authSession) {
	            // jika ada
	            $param = array(
	                'email' => $authSession->Email,
	                'password' => $request->password
	                 );
	            // maka diloginkan langsung
	            $login = (object) RestCurl::exec('POST',env('URL_SERVICE_ACCOUNT').'/auth/login',$param);

	            if ($login->status == 200 ) {
	                $loginSession = (array) $login->data->data;
	                // dijadikan ke session dengan array user
	                session(['access_token' => $loginSession['access_token'] ]);
	            } else {
	                $request->session()->flash('status', 'Silahkan coba kembali.');
	                return redirect('register');
	            }
	        }
    	}

        return redirect('profile');
    }
}
