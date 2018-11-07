<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    { 
    	// panggil session jika ingin attribute user
    	return view('frontend.profile.index_profile');
    }
}
