<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;


class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all()->sortByDesc('created_at');
        return view('BackEnd.Pages.Admin.Customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Pages.Admin.Customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'unique:customers|required|max:30|string',
            'title_en' => 'unique:customers|required|max:30|string',
            'photo' => 'required|image',
        ], [
            'title.unique' => 'نام مشتری قبلا وارد شده است',
            'title_en.unique' => 'نام مشتری قبلا وارد شده است',
            'title.required' => 'نام مشتری را وارد کنید',
            'title_en.required' => 'نام مشتری را وارد کنید',
            'title.max' => ' استکاراکتر بیش از حد مجاز',
            'title_en.max' => ' استکاراکتر بیش از حد مجاز',
            'title.string' => 'کاراکتر غیر مجاز است',
            'photo.required' => 'عکس مشتری را وارد کنید',
            'photo.image' => 'فایل آپلود شده عکس نمیباشد',

        ]);

        if ($validator->fails()) {
            return redirect('panel/admin/customers/create')
                ->withErrors($validator)
                ->withInput();
        }


        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();
		$img = Image::make($file)
			->fit('300', '300')
			->save('img/admin/customers/' . $name);
        $inputs['photo'] = $name;


//        $customers = $request->all();
        $customers = [
            'title' => $request->title,
            'title_en' => $request->title_en,
            'photo' => $inputs['photo'],
        ];
        if (Customer::create($customers)) {
            return redirect()->back()->with('alert-success', 'مشتری با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Display the specified resource.
     *
     * @param \BoilerSource\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \BoilerSource\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('BackEnd.Pages.Admin.Customers.index', compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \BoilerSource\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \BoilerSource\Customer $customer
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Customer $customer)
    {
        if ($customer->delete()) {
            if (is_readable(public_path() . '/img/admin/customers/' . $customer->photo) && $customer->photo != null) {
                unlink(public_path() . '/img/admin/customers/' . $customer->photo);
            }
            return redirect('/panel/admin/customers/')->with('alert-success', 'مشتری با موفقیت حذف شد. ');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در حذف به وجود آمده، دوباره سعی کنید.');
    }
}
