<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Kavenegar;



class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';


    public function resetPassword(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required|regex:/^[0,9]{2}[0-9]{9}$/',
        ], [
            'mobile.required' => 'شماره تلفن همراه خود را وارد کنید.',
            'mobile.regex' => 'شماره تلفن همراه وارد شده معتبر نمی باشد.',
        ]);


        $user = User::whereMobile($request->mobile)->get();
        $id = User::whereMobile($request->mobile)->value('id');
        if (sizeof($user) > 0) {

            $code = rand(100000, 999999);
            $mobileSms[] = $request->mobile;
            $mobile = $request->mobile;
            $message = 'تغییر رمز حساب شما در فروشگاه آیشیل انجام گردید.' . "\n" . 'نام کاربری: ' . $mobile . "\n" . 'رمز عبور: ' . $code;
            $sender = "10008445";
            Kavenegar::Send($sender, $mobileSms, $message);


            User::whereMobile($request->mobile)->update(['verify_code' => $code,'password' => bcrypt($code)]);

            return redirect('/login')->with('completeResetForm', 'رمز جدید برای شما ارسال گردید.');

        }
        else{
        return redirect('/reset-password')->with('notCompleteResetForm', 'کاربری با این شماره تلفن همراه وجود ندارد.');
    }
    }


    public function showResetForm()
    {
//        if ((Session::has('user_id') && Session::has('type'))) {
            return view('auth.reset');
//        }
//        return back();
    }
}
