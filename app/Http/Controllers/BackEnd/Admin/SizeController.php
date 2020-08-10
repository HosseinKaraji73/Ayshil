<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Size;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size=Size::all()->sortByDesc('created_at');
        return view('BackEnd.Pages.Admin.Size.index',compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Pages.Admin.Size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|max: 255|string|unique:menu_products',
            // 'name_en'=>'required|max: 255|string|unique:menu_products',
        ], [
            'name.required'=>'پر کردن فیلد نام اجباری است',
            // 'name_en.required'=>'پر کردن فیلد نام اجباری است',
            'name.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
            // 'name_en.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
        ]);


        if ($validator->fails()) {
            return redirect('panel/admin/size/create')
                ->withErrors($validator)
                ->withInput();
        }

        $size = [
            'name' => $request->name,
            // 'name_en' => $request->name_en,
        ];
        if (Size::create($size)) {
            return redirect()->back()->with('alert-success', 'رنگ با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \BoilerSource\MenuProduct  $MenuProduct
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        $size=Size::all();
        return view('BackEnd.Admin.Size.index',compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \BoilerSource\Size  $MenuProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        return view('BackEnd.Pages.Admin.Size.edit',compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \BoilerSource\Size  $MenuProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|max: 255|string|unique:menu_products',
            // 'name_en'=>'required|max: 255|string|unique:menu_products',
        ], [
            'name.required'=>'پر کردن فیلد نام اجباری است',
            // 'name_en.required'=>'پر کردن فیلد نام اجباری است',
            'name.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
            // 'name_en.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
        ]);

        if ($validator->fails()) {
            return redirect('panel/admin/size/'.$size->id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $size->name = $request->name;
        // $color->name_en = $request->name_en;
        if ($size->save()) {
            return redirect()->back()->with('alert-success', 'رنگ با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \BoilerSource\MenuProduct  $MenuProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        if($size->delete())
        {
            return redirect()->route('size.index')->with('alert-success','رنگ با موفقیت حذف شد. ');
        }
        return redirect()->route('size.index')->with('alert-danger','مشکلی در حذف به وجود آمده، دوباره سعی کنید.');
    }
        //
    
}
