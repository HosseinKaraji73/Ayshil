<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Kavenegar;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'family' => 'required',
            'mobile' => 'required|unique:users|regex:/^[0,9]{2}[0-9]{9}$/',
            'email' => 'required|max:100|unique:users',
        ], [
            'name.required' => 'نام خود را وارد کنید.',
            'family.required' => 'نام خانوادگی خود را وارد کنید.',
            'mobile.required' => 'شماره تلفن همراه خود را وارد کنید.',
            'mobile.unique' => 'کاربری با این شماره تلفن در حال حاضر وجود دارد.',
            'mobile.regex' => 'شماره تلفن همراه وارد شده معتبر نمی باشد.',
            'email.required' => ' ایمیل خود را وارد نمایید',
            'email.email' => 'فرمت ایمیل نامعتبر.',
            'email.max' => 'فرمت ایمیل نامعتبر.',
            'email.unique' => 'با این ایمیل قبلا ثبت نام کرده اید.',
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User|\Illuminate\Database\Eloquent\Model
     */
    protected function create(array $data)
    {
        $roleId = 2;
        $password = rand(100000, 999999);

        $time = time();
        $rand=rand(1000, 9999);
        $reagentCode=$time . $rand;




        $user = User::create(
            [
                'roleId' => $roleId,
                'reagent' => $reagentCode,
                'name' => $data['name'],
                'family' => $data['family'],
                'mobile' => $data['mobile'],
                'email' => $data['email'],
                'password' => bcrypt($password)
            ]);

//        Auth::login($user);



        $mobileSms[] = $data['mobile'];
        $mobile = $data['mobile'];
        $message = 'حساب شما در فروشگاه آیشیل ساخته شد.' . "\n" . 'نام کاربری: ' . $mobile . "\n" . 'رمز عبور: ' . $password;
        $sender = "10008445";
        Kavenegar::Send($sender, $mobileSms, $message);

        return redirect('/login')->with('completeLoginForm', 'ثبت نام شما با موفقیت انجام شد. نام کاربری و رمز عبور برای شما ارسال شد.');

//        return $user;

    }



    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        //$this->guard()->login($user);

//        return $this->registered($request, $user) ?: redirect($this->redirectPath());
        return $this->registered($request, $user) ?: redirect('/login')->with('completeLoginForm', 'ثبت نام شما با موفقیت انجام شد. نام کاربری و رمز عبور برای شما ارسال شد.');
    }
}
