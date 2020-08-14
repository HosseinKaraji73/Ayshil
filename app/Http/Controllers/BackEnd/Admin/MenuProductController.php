<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use App\MenuProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MenuProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MenuProduct=MenuProduct::all()->sortByDesc('created_at');
        return view('BackEnd.Pages.Admin.MenuProduct.index',compact('MenuProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Pages.Admin.MenuProduct.create');
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
//            'name_en'=>'required|max: 255|string|unique:menu_products',
        ], [
            'name.required'=>'پر کردن فیلد نام اجباری است',
//            'name_en.required'=>'پر کردن فیلد نام اجباری است',
            'name.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
//            'name_en.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
        ]);


        if ($validator->fails()) {
            return redirect('panel/admin/menu-product/create')
                ->withErrors($validator)
                ->withInput();
        }

        $MenuProduct = [
            'name' => $request->name,
//            'name_en' => $request->name_en,
        ];
        if (MenuProduct::create($MenuProduct)) {
            return redirect()->back()->with('alert-success', 'منو با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \BoilerSource\MenuProduct  $MenuProduct
     * @return \Illuminate\Http\Response
     */
    public function show(MenuProduct $MenuProduct)
    {
        $MenuProduct=MenuProduct::all();
        return view('BackEnd.Admin.MenuProduct.index',compact('MenuProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \BoilerSource\MenuProduct  $MenuProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuProduct $MenuProduct)
    {
        return view('BackEnd.Pages.Admin.MenuProduct.edit',compact('MenuProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \BoilerSource\MenuProduct  $MenuProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuProduct $MenuProduct)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|max: 255|string|unique:menu_products',
            'name_en'=>'required|max: 255|string|unique:menu_products',
        ], [
            'name.required'=>'پر کردن فیلد نام اجباری است',
            'name_en.required'=>'پر کردن فیلد نام اجباری است',
            'name.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
            'name_en.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
        ]);

        if ($validator->fails()) {
            return redirect('panel/admin/menu-product/'.$MenuProduct->id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $MenuProduct->name = $request->name;
        $MenuProduct->name_en = $request->name_en;
        if ($MenuProduct->save()) {
            return redirect()->back()->with('alert-success', 'منو با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \BoilerSource\MenuProduct  $MenuProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuProduct $MenuProduct)
    {
        if($MenuProduct->delete())
        {
            return redirect()->route('menu-product.index')->with('alert-success','منو با موفقیت حذف شد. ');
        }
        return redirect()->route('menu-product.index')->with('alert-danger','مشکلی در حذف به وجود آمده، دوباره سعی کنید.');
    }

}
