<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::find(1)->first();
        return view('BackEnd.Pages.Admin.Setting.edit1', compact('settings'));
    }

    public function update(Request $request, $id)
    {
        $settings = Setting::find($id);

        if ($file1 = $request->file('photo1')) {
            if (is_readable(public_path() . '/img/admin/setting/' . $settings->photo1) && $settings->photo1 != null) {
                unlink(public_path() . '/img/admin/setting/' . $settings->photo1);
            }
            $name1 = time() . $file1->getClientOriginalName();
            $img = Image::make($file1)
//                ->fit('630', '330')
            //                ->insert(public_path('img/admin/logo.png'), 'right')
                ->save('img/admin/setting/' . $name1);
            $inputs['photo1'] = $name1;
            /** @var TYPE_NAME $setting */
            $settings->photo1 = $inputs['photo1'];
        }

        if ($file2 = $request->file('photo2')) {
            if (is_readable(public_path() . '/img/admin/setting/' . $settings->photo2) && $settings->photo2 != null) {
                unlink(public_path() . '/img/admin/setting/' . $settings->photo2);
            }
            $name2 = time() . $file2->getClientOriginalName();
            $img = Image::make($file2)
//                ->fit('1440', '800')
            //                ->insert(public_path('img/admin/logo.png'), 'top')
                ->save('img/admin/setting/' . $name2);
            $inputs['photo2'] = $name2;
            /** @var TYPE_NAME $setting */
            $settings->photo2 = $inputs['photo2'];
        }

        if ($file3 = $request->file('photo3')) {
            if (is_readable(public_path() . '/img/admin/setting/' . $settings->photo3) && $settings->photo3 != null) {
                unlink(public_path() . '/img/admin/setting/' . $settings->photo3);
            }
            $name3 = time() . $file3->getClientOriginalName();
            $img = Image::make($file3)
//                ->fit('230', '230')
            //                ->insert(public_path('img/admin/logo.png'), 'top')
                ->save('img/admin/setting/' . $name3);
            $inputs['photo3'] = $name3;
            /** @var TYPE_NAME $setting */
            $settings->photo3 = $inputs['photo3'];
        }

        if ($file4 = $request->file('photo4')) {
            if (is_readable(public_path() . '/img/admin/setting/' . $settings->photo4) && $settings->photo4 != null) {
                unlink(public_path() . '/img/admin/setting/' . $settings->photo4);
            }
            $name4 = time() . $file4->getClientOriginalName();
            $img = Image::make($file4)
//                ->fit('230', '230')
            //                ->insert(public_path('img/admin/logo.png'), 'top')
                ->save('img/admin/setting/' . $name4);
            $inputs['photo4'] = $name4;
            /** @var TYPE_NAME $setting */
            $settings->photo4 = $inputs['photo4'];
        }

        if ($file5 = $request->file('photo5')) {
            if (is_readable(public_path() . '/img/admin/setting/' . $settings->photo5) && $settings->photo5 != null) {
                unlink(public_path() . '/img/admin/setting/' . $settings->photo5);
            }
            $name5 = time() . $file5->getClientOriginalName();
            $img = Image::make($file5)
            //                ->fit('230', '230')
            //                ->insert(public_path('img/admin/logo.png'), 'top')
                ->save('img/admin/setting/' . $name5);
            $inputs['photo5'] = $name5;
            /** @var TYPE_NAME $setting */
            $settings->photo5 = $inputs['photo5'];
        }

        if ($file6 = $request->file('photo6')) {
            if (is_readable(public_path() . '/img/admin/setting/' . $settings->photo6) && $settings->photo6 != null) {
                unlink(public_path() . '/img/admin/setting/' . $settings->photo6);
            }
            $name6 = time() . $file6->getClientOriginalName();
            $img = Image::make($file6)
            //                ->fit('230', '230')
            //                ->insert(public_path('img/admin/logo.png'), 'top')
                ->save('img/admin/setting/' . $name6);
            $inputs['photo6'] = $name6;
            /** @var TYPE_NAME $setting */
            $settings->photo6 = $inputs['photo6'];
        }

        if ($file7 = $request->file('photo7')) {
            if (is_readable(public_path() . '/img/admin/setting/' . $settings->photo7) && $settings->photo7 != null) {
                unlink(public_path() . '/img/admin/setting/' . $settings->photo7);
            }
            $name7 = time() . $file7->getClientOriginalName();
            $img = Image::make($file7)
            //                ->fit('230', '230')
            //                ->insert(public_path('img/admin/logo.png'), 'top')
                ->save('img/admin/setting/' . $name7);
            $inputs['photo7'] = $name7;
            /** @var TYPE_NAME $setting */
            $settings->photo7 = $inputs['photo7'];
        }

        if ($file8 = $request->file('photo8')) {
            if (is_readable(public_path() . '/img/admin/setting/' . $settings->photo8) && $settings->photo8 != null) {
                unlink(public_path() . '/img/admin/setting/' . $settings->photo8);
            }
            $name8 = time() . $file8->getClientOriginalName();
            $img = Image::make($file8)
            //                ->fit('230', '230')
            //                ->insert(public_path('img/admin/logo.png'), 'top')
                ->save('img/admin/setting/' . $name8);
            $inputs['photo8'] = $name8;
            /** @var TYPE_NAME $setting */
            $settings->photo8 = $inputs['photo8'];
        }
        if (!isset($request->bank_portal)) {
            $settings->bank_portal = 0;
        } else {
            $settings->bank_portal = 1;
        }

        $settings->title1 = $request->title1;
        $settings->title2 = $request->title2;
        $settings->title3 = $request->title3;
        $settings->title4 = $request->title4;
        $settings->text1 = $request->text1;
        $settings->text2 = $request->text2;
        $settings->text3 = $request->text3;
        $settings->text4 = $request->text4;

        if ($settings->save()) {
            return redirect()->back()->with('alert-success', 'تفییرات با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');

    }

}
