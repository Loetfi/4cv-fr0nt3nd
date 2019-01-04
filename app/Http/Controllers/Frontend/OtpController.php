<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Helpers\Api;
use App\Http\Traits\TraitOtp;
use App\Http\Controllers\Controller;

class OtpController extends Controller
{
    use TraitOtp;

    public function index($phone_number)
    {
        $data = [
            'phone_number'  => $phone_number,
            'description'   => 'OTP From Astra Car Valuation (ACV)',
            'campaign'      => 'OTP',
            'user_id'       => 1
        ];
        $r = $this->sendOtp($data);
    	if($r->status == 200) { // otp send
    		session([
                'otp_code'      =>$r->data->data->otp_code,
                // 'otp_code'      => '12345',
                'phone_number'  =>$phone_number
            ]);

    		return view('frontend.otp.index_otp');
    	} else { // otp not send
    		session()->flash('flash_notification',['type'=>'danger','message'=>'Terjadi kesalahan sistem']);

    		return response()->json(['type'=>'danger','message'=>'Terjadi kesalahan sistem']);
    	}
    }

    public function validateOtp(Request $request)
    {
        $this->validate($request, [
            'otp_code' => 'required'
        ]);
        
        $session_otp_code = session()->get('otp_code');
        
        if($request->otp_code == $session_otp_code) { // otp code sama dengan session
        
            return response()->json(Api::format('1',[],'Kode otp sama'), 200);
        
        } else { // otp code tidak sama
          
            return response()->json(Api::format('0',[],'Kode otp tidak sama'), 200);
        
        }
    }

    public function resendOtp()
    {
        $phone_number = session()->get('phone_number');
        $data = [
            'user_id'       => 1,
            'phone_number'  => $phone_number,
            'description'   => 'Resend OTP From Astra Car Valuation (ACV)',
            'campaign'      => 'Resend OTP',
        ];
        $r = $this->sendOtp($data);
        if($r->status == 200) { // otp send
            session([
                'otp_code'      =>$r->data->data->otp_code,
                'phone_number'  =>$phone_number
            ]);

            return response()->json(Api::format('1',[],'Otp berhasil dikirim ulang'), 200);

        } else { // otp not send
            session()->flash('flash_notification',['type'=>'error','message'=>'Terjadi kesalahan sistem']);

            return response()->json(Api::format('0',[],'Otp gagal dikirim'), 200);
        }
    }
}
