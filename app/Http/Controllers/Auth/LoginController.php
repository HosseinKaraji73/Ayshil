<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required|regex:/^[0,9]{2}[0-9]{9}$/',
            'password' => 'required|min:6',
//            'g-recaptcha-response' => 'required|captcha'
        ],[
            'mobile.required' => 'شماره تلفن همراه خود را وارد کنید.',
            'mobile.unique' => 'کاربری با این شماره تلفن در حال حاضر وجود دارد.',
            'mobile.regex' => 'شماره تلفن همراه وارد شده معتبر نمی باشد.',
            'password.required' => 'رمز عبور خود را وارد کنید.',
            'password.min' => 'رمز عبور حداقل باید 6 کاراکتر باشد.',
//            'g-recaptcha-response.required' => 'تایید کنید که ربات نیستید',
//            'g-recaptcha-response.captcha' => 'تایید کنید که ربات نیستید',
        ]);


        if (Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password, 'active' => 1])) {
            return redirect()->intended('/');
        }
        return back()->with('password', 'رمز عبور اشتباه است');
    }

}
