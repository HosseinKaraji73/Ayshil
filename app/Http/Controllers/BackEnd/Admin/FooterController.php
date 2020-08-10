<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;


class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $footers = Footer::find(1)->first();
        return view('BackEnd.Pages.Admin.Footer.edit1', compact('footers'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $footers = Footer::find($id);


        if($file1 = $request->file('logo1')){
            if(is_readable(public_path() . '/img/admin/setting/' . $footers->logo1) && $footers->logo1!=NULL){
                unlink(public_path() . '/img/admin/setting/' . $footers->logo1);
            }
            $name1 = time() . $file1->getClientOriginalName();
            $img = Image::make($file1)
//                ->fit('500', '500')
                //				->insert(public_path('img/admin/admin/logo.png'), 'top')
                ->save('img/admin/setting/' . $name1);
            $inputs['logo1'] = $name1;
            $footers->logo1 = $inputs['logo1'];
        }

//        if($file2 = $request->file('logo2')){
//            if(is_readable(public_path() . '/img/admin/setting/' . $footers->logo2) && $footers->logo2!=NULL){
//                unlink(public_path() . '/img/admin/setting/' . $footers->logo2);
//            }
//            $name2 = time() . $file2->getClientOriginalName();
//            $img = Image::make($file2)
////                ->fit('500', '500')
//                //				->insert(public_path('img/admin/admin/logo.png'), 'top')
//                ->save('img/admin/setting/' . $name2);
//            $inputs['logo2'] =  $name2;
//            /** @var TYPE_NAME $setting */
//            $footers->logo2 = $inputs['logo2'];
//        }
//
//        if($file3 = $request->file('logo3')){
//            if(is_readable(public_path() . '/img/admin/setting/' . $footers->logo3) && $footers->logo3!=NULL){
//                unlink(public_path() . '/img/admin/setting/' . $footers->logo3);
//            }
//            $name3 = time() . $file3->getClientOriginalName();
//            $img = Image::make($file3)
////                ->fit('500', '500')
//                //				->insert(public_path('img/admin/admin/logo.png'), 'top')
//                ->save('img/admin/setting/' . $name3);
//            $inputs['logo3'] =  $name3;
//            /** @var TYPE_NAME $setting */
//            $footers->logo3 = $inputs['logo3'];
//        }
//
//
//        if($file4 = $request->file('logo4')){
//            if(is_readable(public_path() . '/img/admin/setting/' . $footers->logo4) && $footers->logo4!=NULL){
//                unlink(public_path() . '/img/admin/setting/' . $footers->logo4);
//            }
//            $name4 = time() . $file4->getClientOriginalName();
//            $img = Image::make($file4)
////                ->fit('500', '500')
//                //				->insert(public_path('img/admin/admin/logo.png'), 'top')
//                ->save('img/admin/setting/' . $name4);
//            $inputs['logo4'] =  $name4;
//            /** @var TYPE_NAME $setting */
//            $footers->logo4 = $inputs['logo4'];
//        }





        $footers->instagram = $request->instagram;
        $footers->telegram = $request->telegram;
        $footers->google = $request->google;
        $footers->whatsApp = $request->whatsup;
        $footers->facebook = $request->facebook;
        $footers->address1 = $request->address1;
        $footers->address1_en = $request->address1_en;
        $footers->email = $request->email;
        $footers->phone1 = $request->phone1;

        $footers->othertext1 = $request->othertext1;
        $footers->othertext1_en = $request->othertext1_en;


        if($footers->save()){
            return redirect()->back()->with('alert-success', 'تفییرات با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');

    }

}
