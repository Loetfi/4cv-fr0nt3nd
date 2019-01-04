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
		$description = 'Lorem Ipsum Dolor Sit Amet';
		$campaign = 'Lorem Ipsum';
        $user_id = 1; 
    	$r = $this->sendOtp($phone_number, $description, $campaign, $user_id);
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
        // dd($request->all());
        $this->validate($request, [
            'otp_code' => 'required'
        ]);

        try {
            $session_otp_code = session()->get('otp_code');
            if($request->otp_code == $session_otp_code) { // otp code sama dengan session
                return response()->json(Api::format('1',[],'Kode otp sama'), 200);
            } else { // otp code tidak sama
                return response()->json(Api::format('0',[],'Kode otp tidak sama'), 200);
            }
        } catch (\Exception $e) {
            // session()->flash('flash_notification',['type'=>'danger','message'=>'Terjadi kesalahan, cobalah beberapa saat lagi']);
            return response()->json(Api::format('0',[],'Terjadi kesalahan, cobalah beberapa saat lagi'), 200);
        }
    }

    public function resendOtp(Request $request)
    {
        try {
            $description = 'Resend OTP';
            $campaign = 'Resend OTP';
            $phone_number = session()->get('phone_number');
            $r = $this->sendOtp($phone_number, $description, $campaign);
            if($r->status == 200) { // otp send
                session([
                    'otp_code'      =>$r->data->data->otp_code,
                    'phone_number'  =>$phone_number
                ]);

                return response()->json(Api::format('1',[],'Otp berhasil dikirim ulang'), 200);

            } else { // otp not send
                // session()->flash('flash_notification',['type'=>'error','message'=>'Terjadi kesalahan sistem']);

                return response()->json(Api::format('0',[],'Otp gagal dikirim'), 200);
            }
        } catch (\Exception $e) {
            session()->flash('flash_notification',['type'=>'error','message'=>'Terjadi kesalahan sistem']);

            return redirect('otp/'.$phone_number);
        }
    }
}
