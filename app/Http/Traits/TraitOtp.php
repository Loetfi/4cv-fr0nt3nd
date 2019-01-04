<?php

namespace App\Http\Traits;

use App\Http\Helpers\RestCurl;

trait TraitOtp {

	public function sendOtp($phone_number, $description, $campaign, $user_id)
    {
    	$data = [
    		'phone_number' 	=> $phone_number,
    		'description'	=> $description,
    		'campaign'		=> $campaign,
            'user_id'       => $user_id
    	];
    	$result = (object) RestCurl::exec('POST',env('URL_SERVICE_OTP').'/send-otp',$data);

    	return $result;
    }
}