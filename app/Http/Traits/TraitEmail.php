<?php

namespace App\Http\Traits;

use App\Http\Helpers\RestCurl;

trait TraitEmail {

	public function sendEmail($to_email, $subject, $body) 
    {
        $data_email = [
            'body'  	=> $body,
            'to'    	=> $to_email,
            'subject'   => $subject ? $subject : 'Astra Car Valuation (ACV)'
        ];

        $notif_email = (object) RestCurl::exec('POST',env('URL_SERVICE_NOTIF').'/send-email', $data_email);
        return $notif_email;
    }
}