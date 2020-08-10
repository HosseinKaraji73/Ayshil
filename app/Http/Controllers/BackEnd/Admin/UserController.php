<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;


class UserController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        return view('BackEnd.Pages.Admin.Profile.edit',compact('user'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'avatar'=>'nullable|image|max:1000',
            'name'=>'required|max:255|string',
            'family'=>'required|max:255|string',
//            'mobile' => ['required' ,'regex:/^(09)[0-9]{9}$/' ,Rule::unique('users')->ignore($user->id)],
//            'email' => ['required' ,'max:255', 'email',Rule::unique('users')->ignore($user->id)],
//            'address'=>'required|max:1024|string',
        ],[
            'avatar.image'=>'فایل مورد نظر باید تصویر باشد.',
            'avatar.max'=>'حجم تصویر نباید از 1 مگابایت بیشتر باشد.',
            'name.required'=>'نام خود را وارد کنید.',
            'name.max'=>'تعداد کاراکترهای وارد شده بیش ازحد مجاز می باشد.',
            'name.string'=>'نام باید شامل کاراکتر باشد.',
            'family.required'=>'نام خانوادگی خود را وارد کنید.',
            'family.max'=>'تعداد کاراکترهای وارد شده بیش ازحد مجاز می باشد.',
            'family.string'=>'نام خانوادگی باید شامل کاراکتر باشد.',
//            'mobile.required'=>'شماره تلفن همراه خود را وارد کنید.',
//            'mobile.regex'=>'شماره تلفن همراه وارد شده معتبر نمی باشد.',
//            'mobile.unique'=>'این شماره تلفن همراه قبلا ثبت شده است.',
//            'email.required'=>'آدرس ایمیل خود را وارد کنید.',
//            'email.max'=>'تعداد کاراکترهای وارد شده بیش ازحد مجاز می باشد.',
//            'email.email'=>'آدرس ایمیل وارد شده معتبر نمی باشد.',
//            'email.unique'=>'این آدرس ایمیل قبلا ثبت شده است.',
//            'address.required'=>'آدرس را وارد کنید.',
//            'address.max'=>'تعداد کاراکترهای وارد شده بیش ازحد مجاز می باشد.',
//            'address.string'=>'آدرس باید شامل کاراکتر باشد.',
        ]);

        $inputs = $request->all();

//        if($file = $request->file('avatar'))
//        {
//            if(is_readable(public_path(). $user->avatar)&& $user->avatar !='/images/User/user-default.png')
//            {
//                unlink(public_path() .$user->avatar);
//            }
//            $name = time() . $file->getClientOriginalName();
//            $file->move('img/admin/profile',$name);
//            $inputs['avatar']=$name;
//        }


        if($file1 = $request->file('avatar')){
            if(is_readable(public_path() . '/img/admin/profile/' . $user->photo1) && $user->photo1!=NULL){
                unlink(public_path() . '/img/admin/profile/' . $user->photo1);
            }
            $name1 = time() . $file1->getClientOriginalName();
            $img = Image::make($file1)
//                ->fit('500', '500')
                ->save('img/admin/profile/' . $name1);
            $inputs['avatar'] = $name1;
            $user->avatar = $inputs['avatar'];
        }




            $user->name = $request->name;
            $user->family = $request->family;

        if($user->save())
        {
            return redirect()->back()->with('alert-success','اطلاعات شما با موفقیت ویرایش شد.');
        }
        return redirect()->back()->with('alert-danger','مشکلی در ویرایش به وجود آمده، دوباره سعی کنید.');

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Function: ShowProfileForm
     * Returns:
     *  Return View
     */
    public function ShowProfileForm()
    {
        $user = Auth::user();
        return view('BackEnd.Pages.Admin.Profile.show' ,compact('user'));
    }



    public function changePasswordForm()
    {
        $user = Auth::user();
        return view('BackEnd.Pages.Admin.Profile.changePassword' ,compact('user'));
    }



    public function changePassword(Request $request ,$id)
    {
        $user = User::find($id);
        $this->validate($request, [
            'oldPassword' => 'required',
            'newPassword' => 'required|min:6|confirmed'
        ], [
            'oldPassword.required' => 'رمز عبور فعلی خود را وارد کنید.',
            'newPassword.required' => 'رمز عبور جدید را وارد کنید.',
            'newPassword.min' => 'رمز انتخابی شما باید حداقل شامل 6 کاراکتر باشد.',
            'newPassword.confirmed' => 'تکرار رمز مطابقت ندارد.',
        ]);

        if (Hash::check($request->oldPassword, $user->password)) {
            if ($user->update(['password' => Hash::make($request->newPassword)])) {
                return redirect()->back()->with('alert-success', ' رمز عبور با موفقیت تغییر یافت.');
            }
            return redirect()->back()->with('alert-danger', 'تغییر رمز عبور نا موفق بود! لطفا مجددا تلاش کنید.');
        }
        return redirect()->back()->with('alert-danger', ' رمز عبور فعلی شما صحیح نمی باشد.');
    }


    public function indexCostomer()
    {
        $costomer = User::all();
        return view('BackEnd.Pages.Admin.Customer.index' , compact('costomer'));
    }


}
