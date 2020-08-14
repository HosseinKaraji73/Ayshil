<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use App\MenuProduct;
use App\SubMenuProduct;
use App\SubSubMenuProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubSubMenuProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $MenuProduct=MenuProduct::all()->sortByDesc('created_at');
        $SubSubMenuProduct=SubSubMenuProduct::
        join('menu_products' ,'sub_menu_products.menuProducts_id','menu_products.id')
            ->select('sub_menu_products.*','menu_products.name as menuProductsNameFA','menu_products.name_en as menuProductsNameEN')
            ->get()
            ->sortByDesc('created_at');



        return view('BackEnd.Pages.Admin.SubSubMenuProduct.index',compact('MenuProduct','SubSubMenuProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subMenuProduct=SubMenuProduct::pluck('name','id')->sortByDesc('created_at');
        $MenuProduct=MenuProduct::pluck('name','id')->sortByDesc('created_at');

        return view('BackEnd.Pages.Admin.SubSubMenuProduct.create',compact('subMenuProduct','MenuProduct'));
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
            'name'=>'required|max: 255|string|unique:sub_sub_menu_products',
//            'name_en'=>'required|max: 255|string|unique:sub_menu_products',
        ], [
            'name.required'=>'پر کردن فیلد نام اجباری است',
//            'name_en.required'=>'پر کردن فیلد نام اجباری است',
            'name.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
//            'name_en.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
        ]);


        if ($validator->fails()) {
            return redirect('panel/admin/sub-sub-menu-product/create')
                ->withErrors($validator)
                ->withInput();
        }

        $SubSubMenuProduct = [
            'name' => $request->name,
//            'name_en' => $request->name_en,
            'subMenuProducts_id' => $request->subMenuProducts_id,
        ];
        if (SubSubMenuProduct::create($SubSubMenuProduct)) {
            return redirect()->back()->with('alert-success', 'منو با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \BoilerSource\SubSubMenuProduct  $SubSubMenuProduct
     * @return \Illuminate\Http\Response
     */
    public function show(SubSubMenuProduct $SubSubMenuProduct)
    {
        $SubSubMenuProduct=SubSubMenuProduct::all();
        return view('BackEnd.Admin.SubSubMenuProduct.index',compact('SubSubMenuProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\SubSubMenuProduct $SubSubMenuProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSubMenuProduct $SubSubMenuProduct)
    {
        $MenuProduct=MenuProduct::pluck('name','id')->sortByDesc('created_at');

        return view('BackEnd.Pages.Admin.SubSubMenuProduct.edit',compact('MenuProduct','SubSubMenuProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \BoilerSource\SubSubMenuProduct  $SubSubMenuProduct
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, SubSubMenuProduct $SubSubMenuProduct)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|max: 255|string|unique:sub_sub_menu_products',
//            'name_en'=>'required|max: 255|string|unique:sub_menu_products',
        ], [
            'name.required'=>'پر کردن فیلد نام اجباری است',
//            'name_en.required'=>'پر کردن فیلد نام اجباری است',
            'name.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
//            'name_en.unique'=>'قبلا منویی با این عنوان ثبت شده است.',
        ]);

        if ($validator->fails()) {
            return redirect('panel/admin/sub-sub-menu-product/'.$SubSubMenuProduct->id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $SubSubMenuProduct->name = $request->name;
//        $SubSubMenuProduct->name_en = $request->name_en;
        if ($SubSubMenuProduct->save()) {
            return redirect()->back()->with('alert-success', 'منو با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Http\Controllers\BackEnd\Admin\SubSubMenuProduct $SubSubMenuProduct
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(SubSubMenuProduct $SubSubMenuProduct)
    {
        if($SubSubMenuProduct->delete())
        {
            return redirect()->route('menu-product.index')->with('alert-success','منو با موفقیت حذف شد. ');
        }
        return redirect()->route('menu-product.index')->with('alert-danger','مشکلی در حذف به وجود آمده، دوباره سعی کنید.');
    }
}
