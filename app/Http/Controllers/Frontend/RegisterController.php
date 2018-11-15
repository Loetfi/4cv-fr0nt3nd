<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Helpers\Api;
use App\Http\Helpers\RestCurl;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Traits\TraitEmail;

class RegisterController extends Controller
{
    use TraitEmail;

    /**
    * @return view index register
    */
    public function index()
    {
    	return view('frontend.register.index_register');
    }

    /**
    * @param fullname string
    * @param email unique
    * @param password min 6, ConfirmPassword same Password
    * @param phone_number numeric
    * @return success send email
    */
    public function store(Request $request)
    {
    	$data_register = [
    		'fullname'			=> $request->fullname,
    		'email'				=> $request->email,
    		'password'      	=> $request->password,
            'confirm_password'	=> $request->confirm_password,
    		'phone_number' 		=> $request->phone_number,
            'is_active'         => 0,
    	];

    	$user = (object) RestCurl::exec('POST',env('URL_SERVICE_ACCOUNT').'/auth/register',$data_register);
    	// dd($user);
    	if($user->status !== 200) {
            // email exist and fail insert
            return response()->json(Api::format('0',[],'Email sudah terdaftar'), 200);
    	} else {
            // success insert and send email
            $time = Carbon::now()->addDays(3);
            
            $to_email = $user->data->data->Email;
            $subject = 'Astra Car Valuation (ACV) | Link Aktivasi Akun';
            $body = 'Berikut adalah link untuk mengaktifkan account anda, dengan waktu 3 hari setelah register '
                        . ENV('APP_URL') . '/register/active-account/'. urlencode(encrypt($to_email.'|'.$time));

            // send email
            $r =  $this->sendEmail($to_email,$subject,$body);

            if ($r->status == 200) {
                
                $email = $r->data->data->email->To;
                
                session(['email'=>$to_email]);
                
                return response()->json(Api::format('1',[],$r->data->message), 200);
            
            } else {
                
                return response()->json(Api::format('0',[],'Email untuk aktivasi akun gagal kirim'), 200);
            
            }
        }
    }

    /**
    * @param $hash = email|time
    * @return redirect('/') jika berhasil aktivasi
    * @return redirect('/') jika gagal update IsActive 0 menjadi 1 berdasarkan email
    * @return redirect('register/resend-link-page/'.$hash) jika time < date_now()
    */
    public function activeAccount($hash)
    {
        // dd(urldecode(decrypt($hash)).' '.Carbon::now());
        try {
            if(urldecode(decrypt($hash)) === '') { // hash hasilnya ''  redirect('/')
                session()->flash('flash_notification',['type'=>'danger','message'=>'Terjadi kesalahan']);
                return redirect('/');
            } else { // hash hasilnya email|jam
                $explode = explode('|', urldecode(decrypt($hash)));
                $email = $explode[0];
                $time = $explode[1];
                if($time > Carbon::now()) { // time hash > time sekarang
                    // update IsActive 0 to 1
                    $user = (object) RestCurl::exec('POST',env('URL_SERVICE_ACCOUNT').'/auth/register/active-account',
                            ['is_active'=> '1','email'=>$email]);
                    // dd($user);
                    if($user->status == 200) {
                        session()->flash('flash_notification',['type'=>'success','message'=>'Aktivasi akun berhasil, silahkan login']);
                        return redirect('/');
                    } else {                 
                        session()->flash('flash_notification',['type'=>'danger','message'=>'Terjadi kesalahan, cobalah beberapa saat lagi']);
                        return redirect('/');
                    }
                } else {
                    // page insert email untuk kirim url baru active user
                    return redirect('register/resend-link-page/'.$hash);
                }
            }
        } catch (\Exception $e) {
            session()->flash('flash_notification',['type'=>'danger','message'=>'Terjadi kesalahan sistem, cobalah beberapa saat lagi']);
            return redirect('/');
        }
    }

    /**
    * @param $hash = email|waktu
    * @return view('f_send_link')
    */
    public function resendLinkPage($hash)
    {
        $data['hash'] = $hash;
        return view('frontend.register.f_send_link',$data);
    }

    /**
    * @param request->email
    * @return json
    */
    public function sendLink(Request $request)
    {
        // dd($request->all());
        $explode = explode('|', urldecode(decrypt($request->hash)));
        
        if($explode[0] == $request->email) { // email == $request->email
            
            $time = Carbon::now()->addDays(3);

            $to_email = $request->email;
            $subject = 'Astra Car Valuation (ACV) | Link Aktivasi Akun';
            $body = 'Berikut adalah link untuk mengaktifkan account anda, dengan waktu 3 hari setelah register '
                        . ENV('APP_URL') . '/register/active-account/'. urlencode(encrypt($to_email.'|'.$time));
            
            // send email
            $r = $this->sendEmail($to_email, $subject, $body);

            session()->flash('flash_notification',['type'=>'success','message'=>'Link aktivasi telah dikirim ulang, silahkan periksa kembali email anda']);
            
            return response()->json(Api::format('1',[],'Link aktivasi telah dikirim ulang, silahkan periksa kembali email anda'), 200);
        } else { // email != $request->email
            
            return response()->json(Api::format('0',[],'Email tidak valid'), 200);

        }
    }

    /**
    * @param email required from session
    * @return json and resend email activation account
    */
    public function resendEmail()
    {
        $time = Carbon::now()->addDays(3);

        $to_email   = session()->get('email');
        $subject    = 'Astra Car Valuation (ACV) | Link Aktivasi Akun [Kirim Ulang]';
        $body       = 'Berikut adalah link untuk mengaktifkan account anda, dengan waktu 3 hari setelah register '
                        . ENV('APP_URL') . '/register/active-account/'. urlencode(encrypt($to_email.'|'.$time));

        // send email
        $r =  $this->sendEmail($to_email,$subject,$body);
        if ($r->status == 200) {
            
            return response()->json(Api::format('1',[],'Email telah dikirim ulang, silahkan periksa kembali email anda'), 200);
        
        } else {
            
            return response()->json(Api::format('0',[],'Email gagal dikirim ulang'), 200);

        }
    }
}