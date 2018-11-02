<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
    	// dd($request->session()->all());
    	// $request->session()->get('access_token');
    	return view('frontend.profile.index_profile');
    }
}
