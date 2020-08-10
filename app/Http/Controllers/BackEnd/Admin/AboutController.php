<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class AboutController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$abouts = About::all()->sortByDesc('created_at');
		return view('BackEnd.Pages.Admin.Abouts.index' , compact('abouts'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
	public function create()
	{

	}

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
	public function store(Request $request)
	{
		//
	}

    /**
     * Display the specified resource.
     *
     * @param \App\About $about
     * @return void
     */
	public function show(About $about)
	{
		//
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\About $about
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function edit(About $about)
	{
		return view('BackEnd.Pages.Admin.Abouts.edit' , compact('about'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\About $about
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
	public function update(Request $request , About $about)
	{
		$validator = Validator::make($request->all() , [

			'teamPhoto1' => 'image|mimes:jpeg,png|max:1024' ,
			'teamPhoto2' => 'image|mimes:jpeg,png|max:1024' ,
			'teamPhoto3' => 'image|mimes:jpeg,png|max:1024' ,
			'teamPhoto4' => 'image|mimes:jpeg,png|max:1024' ,
            'teamDescrition1' => 'required|max:100000' ,
            'teamDescrition1_en' => 'required|max:100000' ,
            'teamDescrition2' => 'required|max:100000' ,
            'teamDescrition2_en' => 'required|max:100000' ,
            'teamDescrition3' => 'required|max:100000' ,
            'teamDescrition3_en' => 'required|max:100000' ,
            'teamDescrition4' => 'required|max:100000' ,
            'teamDescrition4_en' => 'required|max:100000' ,
            'text1' => 'required|max:100000' ,
            'text1_en' => 'required|max:100000' ,
            'text2' => 'required|max:100000' ,
            'text2_en' => 'required|max:100000' ,
            'text3' => 'required|max:100000' ,
            'text3_en' => 'required|max:100000' ,
            'text4' => 'required|max:100000' ,
            'text4_en' => 'required|max:100000' ,
            'text5' => 'required|max:100000' ,
            'text5_en' => 'required|max:100000' ,
            'text6' => 'required|max:100000' ,
            'text6_en' => 'required|max:100000' ,
		] , [
			'teamPhoto1.image' => 'فایل آپلود شده نا متعبر است' ,
			'teamPhoto1.mimes' => 'فرمت عکس نامعتبر است' ,
			'teamPhoto1.size' => 'حجم عکس آپلود شده بیش از حد مجاز است' ,
			'teamPhoto2.image' => 'فایل آپلود شده نا متعبر است' ,
			'teamPhoto2.mimes' => 'فرمت عکس نامعتبر است' ,
			'teamPhoto2.size' => 'حجم عکس آپلود شده بیش از حد مجاز است' ,
            'teamPhoto3.image' => 'فایل آپلود شده نا متعبر است' ,
            'teamPhoto3.mimes' => 'فرمت عکس نامعتبر است' ,
            'teamPhoto3.size' => 'حجم عکس آپلود شده بیش از حد مجاز است' ,
            'teamPhoto4.image' => 'فایل آپلود شده نا متعبر است' ,
            'teamPhoto4.mimes' => 'فرمت عکس نامعتبر است' ,
            'teamPhoto4.size' => 'حجم عکس آپلود شده بیش از حد مجاز است' ,
            'teamDescrition1.required' => 'توضیحات را وارد کنید',
            'teamDescrition1_en.required' => 'توضیحات را وارد کنید',
            'teamDescrition2.required' => 'توضیحات را وارد کنید',
            'teamDescrition2_en.required' => 'توضیحات را وارد کنید',
            'teamDescrition3.required' => 'توضیحات را وارد کنید',
            'teamDescrition3_en.required' => 'توضیحات را وارد کنید',
            'teamDescrition4.required' => 'توضیحات را وارد کنید',
            'teamDescrition4_en.required' => 'توضیحات را وارد کنید',
            'text1.required' => 'توضیحات را وارد کنید',
            'text1_en.required' => 'توضیحات را وارد کنید',
            'text2.required' => 'توضیحات را وارد کنید',
            'text2_en.required' => 'توضیحات را وارد کنید',
            'text3.required' => 'توضیحات را وارد کنید',
            'text3_en.required' => 'توضیحات را وارد کنید',
            'text4.required' => 'توضیحات را وارد کنید',
            'text4_en.required' => 'توضیحات را وارد کنید',
            'text5.required' => 'توضیحات را وارد کنید',
            'text5_en.required' => 'توضیحات را وارد کنید',
            'text6.required' => 'توضیحات را وارد کنید',
            'text6_en.required' => 'توضیحات را وارد کنید',
        ]);
		if($validator->fails()){
			return redirect('panel/admin/abouts/'.$about->id.'/edit')
				->withErrors($validator)
				->withInput();
		}

		$inputs = $request->all();


		if ($file1 = $request->file('teamPhoto1')) {
			if (is_readable(public_path() . '/img/admin/about/' . $about->teamPhoto1) && $about->teamPhoto1 != null) {
				unlink(public_path() . '/img/admin/about/' . $about->teamPhoto1);
			}
			$name1 = time() . $file1->getClientOriginalName();
			$img = Image::make($file1)
//				->fit('1120', '290')
				//				->insert(public_path('img/admin/logo.png'), 'top-left')
				->save('img/admin/about/' . $name1);
			$inputs['teamPhoto1'] = $name1;
			$about->teamPhoto1 = $inputs['teamPhoto1'];
		}

		if ($file2 = $request->file('teamPhoto2')) {
			if (is_readable(public_path() . '/img/admin/about/' . $about->teamPhoto2) && $about->teamPhoto2 != null) {
				unlink(public_path() . '/img/admin/about/' . $about->teamPhoto2);
			}
			$name2 = time() . $file2->getClientOriginalName();
			$img = Image::make($file2)
//				->fit('1120', '290')
				//				->insert(public_path('img/admin/logo.png'), 'top-left')
				->save('img/admin/about/' . $name2);
			$inputs['teamPhoto2'] = $name2;
			$about->teamPhoto2 = $inputs['teamPhoto2'];
		}

		if ($file3 = $request->file('teamPhoto3')) {
			if (is_readable(public_path() . '/img/admin/about/' . $about->teamPhoto3) && $about->teamPhoto3 != null) {
				unlink(public_path() . '/img/admin/about/' . $about->teamPhoto3);
			}
			$name3 = time() . $file3->getClientOriginalName();
			$img = Image::make($file3)
//				->fit('290', '290')
				//				->insert(public_path('img/admin/logo.png'), 'top-left')
				->save('img/admin/about/' . $name3);
			$inputs['teamPhoto3'] = $name3;
			$about->teamPhoto3 = $inputs['teamPhoto3'];
		}

        if ($file4 = $request->file('teamPhoto4')) {
            if (is_readable(public_path() . '/img/admin/about/' . $about->teamPhoto4) && $about->teamPhoto4 != null) {
                unlink(public_path() . '/img/admin/about/' . $about->teamPhoto4);
            }
            $name4 = time() . $file4->getClientOriginalName();
            $img = Image::make($file4)
//                ->fit('290', '290')
                //				->insert(public_path('img/admin/logo.png'), 'top-left')
                ->save('img/admin/about/' . $name4);
            $inputs['teamPhoto4'] = $name4;
            $about->teamPhoto4 = $inputs['teamPhoto4'];
        }


		$about->teamDescrition1 = $request->teamDescrition1;
		$about->teamDescrition1_en = $request->teamDescrition1_en;
		$about->teamDescrition2 = $request->teamDescrition2;
		$about->teamDescrition2_en = $request->teamDescrition2_en;
		$about->teamDescrition3 = $request->teamDescrition3;
		$about->teamDescrition3_en = $request->teamDescrition3_en;
		$about->teamDescrition4 = $request->teamDescrition4;
		$about->teamDescrition4_en = $request->teamDescrition4_en;
		$about->text1 = $request->text1;
		$about->text1_en = $request->text1_en;
		$about->text2 = $request->text2;
		$about->text2_en = $request->text2_en;
		$about->text3 = $request->text3;
		$about->text3_en = $request->text3_en;
		$about->text4 = $request->text4;
		$about->text4_en = $request->text4_en;
		$about->text5 = $request->text5;
		$about->text5_en = $request->text5_en;
		$about->text6 = $request->text6;
		$about->text6_en = $request->text6_en;



		if ($about->save()) {
			return redirect()->back()->with('alert-success', 'درباره ما با موفقیت ویرایش شد.');
		}
		return redirect()->back()->with('alert-danger', 'مشکلی در ویرایش به وجود آمده، دوباره سعی کنید.');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\About $about
     * @return void
     */
	public function destroy(About $about)
	{
		//
	}
}
