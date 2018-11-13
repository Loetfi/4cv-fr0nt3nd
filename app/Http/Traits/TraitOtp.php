<?php

namespace App\Http\Traits;

use App\Http\Helpers\RestCurl;

trait TraitOtp {

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