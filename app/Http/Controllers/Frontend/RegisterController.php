<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Helpers\Api;
use App\Http\Helpers\RestCurl;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

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
    	$data_register = [
    		'fullname'			=> $request->fullname,
    		'email'				=> $request->email,
    		'password'      	=> $request->password,
            'confirm_password'	=> $request->confirm_password,
    		'phone_number' 		=> $request->phone_number,
            'is_active'         => 0,
    	];

    	$user = (object) RestCurl::exec('POST',env('URL_SERVICE_ACCOUNT').'/auth/register',$data_register);
    	// dd($user);
    	if($user->status !== 200) {
            // email exist and fail insert
            return response()->json(Api::format('0',[],'The email has already been taken'), 200);
    	} else {
            // success insert and send email
            $to_email = $user->data->data->Email;
            $time = Carbon::now()->addDays(3);

            $to_email_time = base64_encode($to_email.'|'.$time);

            $data_email = [
                'body'  => 'Berikut adalah link untuk mengaktifkan account anda, dengan waktu 3 hari setelah register '
                            . ENV('APP_URL') . '/user/active-account/'. $to_email_time ,
                'to'  => $to_email
            ];

            $notif_email = (object) RestCurl::exec('POST',env('URL_SERVICE_NOTIF').'/send-email', $data_email);
            
            // dd($notif_email);

            session()->flash('success_register','Please check your email to active account');

            return response()->json(Api::format(1,[],'Please check your email to active account'), 200);
        }
    }

    public function activeAccount($hash)
    {
        dd(ENV('APP_URL'));
    }
}
