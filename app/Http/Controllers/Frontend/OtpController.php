<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtpController extends Controller
{
    public function index()
    {
    	return view('frontend.otp.index_otp');
    }
}
