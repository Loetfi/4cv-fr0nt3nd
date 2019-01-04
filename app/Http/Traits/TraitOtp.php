<?php

namespace App\Http\Traits;

use App\Http\Helpers\RestCurl;

trait TraitOtp {

	public function sendOtp($data)
    {
    	$result = (object) RestCurl::exec('POST',env('URL_SERVICE_OTP').'/send-otp',$data);

    	return $result;
    }
}