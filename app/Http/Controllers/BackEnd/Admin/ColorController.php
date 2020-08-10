<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Color;


class ColorController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $color=Color::all()->sortByDesc('created_at');
        return view('BackEnd.Pages.Admin.Color.index',compact('color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Pages.Admin.Color.create');
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
            return redirect('panel/admin/color/create')
                ->withErrors($validator)
                ->withInput();
        }

        $color = [
            'name' => $request->name,
            // 'name_en' => $request->name_en,
        ];
        if (Color::create($color)) {
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
    public function show(Color $color)
    {
        $color=Color::all();
        return view('BackEnd.Admin.Color.index',compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \BoilerSource\MenuProduct  $MenuProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        return view('BackEnd.Pages.Admin.Color.edit',compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \BoilerSource\MenuProduct  $MenuProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
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
            return redirect('panel/admin/color/'.$color->id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $color->name = $request->name;
        // $color->name_en = $request->name_en;
        if ($color->save()) {
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
    public function destroy(Color $color)
    {
        if($color->delete())
        {
            return redirect()->route('color.index')->with('alert-success','رنگ با موفقیت حذف شد. ');
        }
        return redirect()->route('color.index')->with('alert-danger','مشکلی در حذف به وجود آمده، دوباره سعی کنید.');
    }

}
