<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Api;
use App\Http\Helpers\RestCurl;

class OtpController extends Controller
{
    public function index($phone_number)
    {
    	// dd(session()->all());
    	try {
    		$description = 'Lorem Ipsum Dolor Sit Amet';
    		$campaign = 'Lorem Ipsum';
	    	$r = $this->sendOtp($phone_number, $description, $campaign);
	    	if($r->status == 200) {
	    		session(['otp_code'=>$r->data->data->otp_code]);

	    		return view('frontend.otp.index_otp');
	    	} else {
	    		session()->flash('flash_notification',['type'=>'error','message'=>'Terjadi kesalahan sistem']);

	    		return redirect('/');
	    	}
    	} catch (\Exception $e) {
    		session()->flash('flash_notification',['type'=>'error','message'=>'Terjadi kesalahan sistem']);
	    		
    		return redirect('/');
    	}
    }

    public function sendOtp($phone_number, $description, $campaign)
    {
    	$data = [
    		'phone_number' 	=> $phone_number,
    		'description'	=> $description,
    		'campaign'		=> $campaign
    	];
    	$result = (object) RestCurl::exec('POST',env('URL_SERVICE_OTP').'/send-otp',$data);

    	return $result;
    }
}
