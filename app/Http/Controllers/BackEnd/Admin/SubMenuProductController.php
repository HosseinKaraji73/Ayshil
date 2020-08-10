<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use App\MenuProduct;
use App\SubMenuProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SubMenuProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $MenuProduct=MenuProduct::all()->sortByDesc('created_at');
        $SubMenuProduct=SubMenuProduct::
            join('menu_products' ,'sub_menu_products.menuProducts_id','menu_products.id')
            ->select('sub_menu_products.*','menu_products.name as menuProductsNameFA','menu_products.name_en as menuProductsNameEN')
            ->get()
            ->sortByDesc('created_at');



        return view('BackEnd.Pages.Admin.SubMenuProduct.index',compact('MenuProduct','SubMenuProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $MenuProduct=MenuProduct::pluck('name','id')->sortByDesc('created_at');

        return view('BackEnd.Pages.Admin.SubMenuProduct.create',compact('MenuProduct'));
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
            'name'=>'required|max: 255|string|unique:sub_menu_products',
            'name_en'=>'required|max: 255|string|unique:sub_menu_products',
        ], [
            'name.required'=>'پر کردن فیلد نام اجباری است',
            'name_en.required'=>'پر کردن فیلد نام اجباری است',
            'name.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
            'name_en.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
        ]);


        if ($validator->fails()) {
            return redirect('panel/admin/sub-menu-product/create')
                ->withErrors($validator)
                ->withInput();
        }

        $SubMenuProduct = [
            'name' => $request->name,
            'name_en' => $request->name_en,
            'menuProducts_id' => $request->menuProducts_id,
        ];
        if (SubMenuProduct::create($SubMenuProduct)) {
            return redirect()->back()->with('alert-success', 'منو با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \BoilerSource\SubMenuProduct  $SubMenuProduct
     * @return \Illuminate\Http\Response
     */
    public function show(SubMenuProduct $SubMenuProduct)
    {
        $SubMenuProduct=SubMenuProduct::all();
        return view('BackEnd.Admin.SubMenuProduct.index',compact('SubMenuProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\SubMenuProduct $SubMenuProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(SubMenuProduct $SubMenuProduct)
    {
        $MenuProduct=MenuProduct::pluck('name','id')->sortByDesc('created_at');

        return view('BackEnd.Pages.Admin.SubMenuProduct.edit',compact('MenuProduct','SubMenuProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \BoilerSource\SubMenuProduct  $SubMenuProduct
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, SubMenuProduct $SubMenuProduct)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|max: 255|string|unique:sub_menu_products',
            'name_en'=>'required|max: 255|string|unique:sub_menu_products',
        ], [
            'name.required'=>'پر کردن فیلد نام اجباری است',
            'name_en.required'=>'پر کردن فیلد نام اجباری است',
            'name.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
            'name_en.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
        ]);

        if ($validator->fails()) {
            return redirect('panel/admin/sub-menu-product/'.$SubMenuProduct->id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $SubMenuProduct->name = $request->name;
        $SubMenuProduct->name_en = $request->name_en;
        if ($SubMenuProduct->save()) {
            return redirect()->back()->with('alert-success', 'منو با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Http\Controllers\BackEnd\Admin\SubMenuProduct $SubMenuProduct
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(SubMenuProduct $SubMenuProduct)
    {
        if($SubMenuProduct->delete())
        {
            return redirect()->route('menu-product.index')->with('alert-success','منو با موفقیت حذف شد. ');
        }
        return redirect()->route('menu-product.index')->with('alert-danger','مشکلی در حذف به وجود آمده، دوباره سعی کنید.');
    }
}
