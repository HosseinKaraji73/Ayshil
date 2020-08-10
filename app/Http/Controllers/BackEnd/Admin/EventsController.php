<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Event;
use App\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Morilog\Jalali\Jalalian;

class EventsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$events = Event::all()->sortByDesc('created_at');
		return view('BackEnd.Pages.Admin.Events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create(Event $event)
	{
		return view('BackEnd.Pages.Admin.Events.create', compact('event'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'title'       => 'required',
			'title_en'       => 'required',
			'text'       => 'required',
			'text_en'       => 'required',
			'description' => 'required',
			'description_en' => 'required',
			'photo1'      => 'required|image|mimes:jpeg,png|max:1024',
		], [
			'title.required'       => 'عنوان را وارد کنید',
			'title_en.required'       => 'عنوان را وارد کنید',
			'text.required'       => 'توضیحات اولیه را وارد کنید',
			'text_en.required'       => 'توضیحات اولیه را وارد کنید',
//			'title.max'            => 'کاراکترهای وارد شده بیش از حد مجاز',
//			'title.string'         => 'کاراکترهای وارد شده مجاز نیست',
			'description.required' => 'توضیحات را وارد کنید',
			'description_en.required' => 'توضیحات را وارد کنید',
//			'description.max'      => 'کاراکترهای وارد شده بیش از حد مجاز',
			'photo1.required'      => 'عکس خبر را وارد کنید',
			'photo1.image'         => 'فایل آپلود شده نا متعبر است',
			'photo1.mimes'         => 'فرمت عکس نامعتبر است',
			'photo1.size'          => 'حجم عکس آپلود شده بیش از حد مجاز است',
		]);
		if($validator->fails()){
			return redirect('panel/admin/news/create')
				->withErrors($validator)
				->withInput();
		}

		$file1 = $request->file('photo1');
		$name1 = time() . $file1->getClientOriginalName();
		$img = Image::make($file1)
			->fit('500', '500')
			->save('img/admin/event/' . $name1);
		$inputs['photo1'] = $name1;


		$events = [
			'title'       => $request->title,
			'title_en'       => $request->title_en,
			'text'       => $request->text,
			'text_en'       => $request->text_en,
			'description' => $request->description,
			'description_en' => $request->description_en,
			'photo1'      => $inputs['photo1'],
			'cteated_at_fa'      => Jalalian::forge('today')->format('%y/%m/%d'),
		];
		if(Event::create($events)){
			return redirect()->back()->with('alert-success', 'خبر با موفقیت ثبت شد.');
		}
		return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param \BoilerSource\Event $event
	 * @return \Illuminate\Http\Response
	 */
	public function show(Event $event)
	{
		return view('BackEnd.Pages.Admin.Events.show', compact('event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \BoilerSource\Event $event
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Event $event)
	{
		return view('BackEnd.Pages.Admin.Events.edit', compact('event'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \BoilerSource\Event $event
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Event $event)
	{
		$validator = Validator::make($request->all(), [
			'title'       => 'required',
            'text'       => 'required',
            'description' => 'required',
			'photo1'      => 'image|mimes:jpeg,png|max:1024',
		], [
			'title.required'       => 'عنوان را وارد کنید',
            'text.required'       => 'توضیحات اولیه را وارد کنید',

//			'title.max'            => 'کاراکترهای وارد شده بیش از حد مجاز',
//			'title.string'         => 'کاراکترهای وارد شده مجاز نیست',
			'description.required' => 'توضیحات را وارد کنید',
//			'description.max'      => 'کاراکترهای وارد شده بیش از حد مجاز',
			'photo1.image'         => 'فایل آپلود شده نا متعبر است',
			'photo1.mimes'         => 'فرمت عکس نامعتبر است',
			'photo1.size'          => 'حجم عکس آپلود شده بیش از حد مجاز است',
		]);
		$inputs = $request->all();

		if($validator->fails()){
			return redirect('panel/admin/events/' . $event->id . '/edit')
				->withErrors($validator)
				->withInput();
		}
		if($file1 = $request->file('photo1')){
			if(is_readable(public_path() . '/img/admin/event/' . $event->photo1) && $event->photo1!=NULL){
				unlink(public_path() . '/img/admin/event/' . $event->photo1);
			}
			$name1 = time() . $file1->getClientOriginalName();
			$img = Image::make($file1)
				->fit('500', '500')
				->save('img/admin/event/' . $name1);
			$inputs['photo1'] = $name1;
			/** @var TYPE_NAME $event */
			$event->photo1 = $inputs['photo1'];
		}


		$event->title = $request->title;
		$event->text = $request->text;
		$event->description = $request->description;
		$event->updated_at_fa = $date = Jalalian::now();


		if($event->save()){
			return redirect()->back()->with('alert-success', 'خبر با موفقیت ویرایش شد.');
		}
		return redirect()->back()->with('alert-danger', 'مشکلی در ویرایش به وجود آمده، دوباره سعی کنید.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \BoilerSource\Event $event
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Event $event)
	{
		if($event->delete()){
			if(is_readable(public_path() . '/img/admin/event/' . $event->photo1) && $event->photo1!=NULL){
				unlink(public_path() . '/img/admin/event/' . $event->photo1);
			}
			if(is_readable(public_path() . '/img/admin/event/' . $event->photo2) && $event->photo2!=NULL){
				unlink(public_path() . '/img/admin/event/' . $event->photo2);
			}
			return redirect('/panel/admin/events/')->with('alert-success', 'محصول با موفقیت حذف شد. ');
		}
		return redirect()->back()->with('alert-danger', 'مشکلی در حذف به وجود آمده، دوباره سعی کنید.');
	}
}
