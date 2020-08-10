<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Contact;
use App\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class ContactController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$contacts = Contact::all();
		return view('BackEnd.Pages.Admin.Contacts.index', compact('contacts'));
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
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Contact $contact
	 * @return \Illuminate\Http\Response
	 */
	public function show(contact $contact)
	{
		//
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Contact $contact
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
	public function edit(Contact $contact)
	{
		return view('BackEnd.Pages.Admin.Contacts.edit', compact('contact'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Contact $contact
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function update(Request $request, Contact $contact)
	{
		$validator = Validator::make($request->all(), [
            'title1' => 'required|max:100000' ,
            'title1_en' => 'required|max:100000' ,
            'title2' => 'required|max:100000' ,
            'title2_en' => 'required|max:100000' ,
            'title3' => 'required|max:100000' ,
            'title3_en' => 'required|max:100000' ,
            'title4' => 'required|max:100000' ,
            'title4_en' => 'required|max:100000' ,

		], [
            'title1.required' => 'توضیحات را وارد کنید',
            'title1_en.required' => 'توضیحات را وارد کنید',
            'title2.required' => 'توضیحات را وارد کنید',
            'title2_en.required' => 'توضیحات را وارد کنید',
            'title3.required' => 'توضیحات را وارد کنید',
            'title3_en.required' => 'توضیحات را وارد کنید',
            'title4.required' => 'توضیحات را وارد کنید',
            'title4_en.required' => 'توضیحات را وارد کنید',
		]);

//		if($validator->fails()){
//			return redirect('panel/admin/contact/' . $contact->id . '/edit')
//				->withErrors($validator)
//				->withInput();
//		}


		$contact->title1 = $request->title1;
		$contact->title1_en = $request->title1_en;
		$contact->title2 = $request->title2;
		$contact->title2_en = $request->title2_en;
		$contact->title3 = $request->title3;
		$contact->title3_en = $request->title3_en;
		$contact->title4 = $request->title4;
		$contact->title4_en = $request->title4_en;


		if($contact->save()){
			return redirect()->back()->with('alert-success', 'ارتباط با ما با موفقیت ویرایش شد.');
		}
		return redirect()->back()->with('alert-danger', 'مشکلی در ویرایش به وجود آمده، دوباره سعی کنید.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Contact $Contact
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Contact $Contact)
	{
		//
	}




	public function listform()
	{
		$form1 = Form::select('id','name','family','subject','proficiency', 'email','phone', 'message','group')
			->get();
		return view('BackEnd.Pages.Admin.Contacts.formindex', compact('form1'));
	}




	public function showform($id)
	{
		$form1 = Form::find($id);
		return view('BackEnd.Pages.Admin.Contacts.formshow', compact('form1'));
	}


}
