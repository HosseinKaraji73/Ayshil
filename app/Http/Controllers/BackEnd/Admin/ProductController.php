<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Color;
use App\Http\Controllers\Controller;
use App\MenuProduct;
use App\Product;
use App\Size;
use App\SubMenuProduct;
use App\Variant;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $product = Product::all()->sortByDesc('created_at');
        return view('BackEnd.Pages.Admin.Products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $product = Product::all();
        $menus = SubMenuProduct::all()->pluck('name', 'id');

        return view('BackEnd.Pages.Admin.Products.create', compact('product', 'menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'menu_id' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'category' => 'required',
            'brand' => 'required',
            'photo1' => 'required|image',
            'photo2' => 'nullable|image',
            'photo3' => 'nullable|image',
            'photo4' => 'nullable|image',
        ], [
            'title.required' => 'نام محصول را وارد کنید.',
            'title.max' => 'تعداد کاراکترهای وارد شده بیش از حد مجاز می باشد.',
            'description.required' => 'توضیحات محصول را وارد کنید.',
            'price.required' => 'قیمت محصول را وارد کنید.',
            'price.integer' => 'تعداد کاراکترهای وارد شده بیش از حد مجاز می باشد.',
            'category.required' => 'نوع فروش را انتخاب کنید',
            'brand.required' => 'برند محصول را وارد کنید.',
            'menu_id.required' => 'منو محصول را وارد کنید.',
            'photo1.required' => 'وارد کردن یک عکس الزامی است ',
            'photo1.image' => 'فایل مورد نظر باید تصویر باشد. ',
            'photo2.image' => 'فایل مورد نظر باید تصویر باشد. ',
            'photo3.image' => 'فایل مورد نظر باید تصویر باشد.',
            'photo4.image' => 'فایل مورد نظر باید تصویر باشد.',
        ]);

        $inputs = $request->all();

        if ($file1 = $request->file('photo1')) {
            $name1 = time() . $file1->getClientOriginalName();
            $img = Image::make($file1)
                ->fit('795', '795')
                ->save('img/admin/product/' . $name1);
            $inputs['photo1'] = $name1;
        }

        if ($file2 = $request->file('photo2')) {
            $name2 = time() . $file2->getClientOriginalName();
            $img = Image::make($file2)
                ->fit('795', '795')
                ->save('img/admin/product/' . $name2);
            $inputs['photo2'] = $name2;
        }

        if ($file3 = $request->file('photo3')) {
            $name3 = time() . $file3->getClientOriginalName();
            $img = Image::make($file3)
                ->fit('795', '795')
                ->save('img/admin/product/' . $name3);
            $inputs['photo3'] = $name3;
        }

        if ($file4 = $request->file('photo4')) {
            $name4 = time() . $file4->getClientOriginalName();
            $img = Image::make($file4)
                ->fit('795', '795')
                ->save('img/admin/product/' . $name4);
            $inputs['photo4'] = $name4;
        }

        //        if($file5 = $request->file('photo5'))
        //        {
        //            $name5 = time() . $file5->getClientOriginalName();
        //            $file5->move('img/admin/product',$name5);
        //            $inputs['photo5'] = $name5;
        //        }

        $price_after_discount = $request->price - ($request->price * $request->discount / 100);

        // if (!isset($request->available)) {
        //     $inputs['available'] = 0;
        // }

        // if (!isset($request->overplus)) {
        //     $inputs['overplus'] = 0;
        // }

        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $code = "Ayshil-";
        for ($i = 0; $i < 7; $i++) {
            $code .= $chars[mt_rand(0, strlen($chars) - 1)];
        }

        $product = new Product();

        if ($request->category == 1) {
            $product->category = 1;
        } elseif ($request->category == 2) {
            $product->category = 2;
        } elseif ($request->category == 3) {
            $product->category = 3;
        } elseif ($request->category == 4) {
            $product->category = 4;
        }

        if (!isset($request->available)) {
            $product->available = 0;
        } else {
            $product->available = 1;
        }

        if (!isset($request->overplus)) {
            $product->overplus = 0;
        } else {
            $product->overplus = 1;
        }

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->code = $code;
        $product->brand = $request->brand;
        $product->sub_menu_product = $request->menu_id;
        $product->discount = $request->discount;
        $product->photo1 = isset($inputs['photo1']) ? $inputs['photo1'] : null;
        $product->photo2 = isset($inputs['photo2']) ? $inputs['photo2'] : null;
        $product->photo3 = isset($inputs['photo3']) ? $inputs['photo3'] : null;
        $product->photo4 = isset($inputs['photo4']) ? $inputs['photo4'] : null;

        if ($product->save()) {
            return redirect()->back()->with('alert-success', 'محصول با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        return view('BackEnd.Pages.Admin.Products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        $menus = MenuProduct::all()->pluck('name', 'id');
        return view('BackEnd.Pages.Admin.Products.edit', compact('product', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'title' => 'required',
            'menu_id' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'category' => 'required',
            'brand' => 'required',
        
        ], [
            'title.required' => 'نام محصول را وارد کنید.',
            'title.max' => 'تعداد کاراکترهای وارد شده بیش از حد مجاز می باشد.',
            'description.required' => 'توضیحات محصول را وارد کنید.',
            'price.required' => 'قیمت محصول را وارد کنید.',
            'price.integer' => 'تعداد کاراکترهای وارد شده بیش از حد مجاز می باشد.',
            'category.required' => 'نوع فروش را انتخاب کنید',
            'brand.required' => 'برند محصول را وارد کنید.',
            'menu_id.required' => 'منو محصول را وارد کنید.',

        ]);

        $inputs = $request->all();

        if ($file1 = $request->file('photo1')) {
            if (is_readable(public_path() . '/img/admin/product/' . $product->photo1) && $product->photo1 != null) {
                unlink(public_path() . '/img/admin/product/' . $product->photo1);
            }
            $name1 = time() . $file1->getClientOriginalName();
            $img = Image::make($file1)
                ->fit('795', '795')
                ->save('img/admin/product/' . $name1);
            $inputs['photo1'] = $name1;
            /** @var TYPE_NAME $product */
            $product->photo1 = $inputs['photo1'];
        }

        if ($file2 = $request->file('photo2')) {
            if (is_readable(public_path() . '/img/admin/product/' . $product->photo2) && $product->photo2 != null) {
                unlink(public_path() . '/img/admin/product/' . $product->photo2);
            }
            $name2 = time() . $file2->getClientOriginalName();
            $img = Image::make($file2)
                ->fit('795', '795')
                ->save('img/admin/product/' . $name2);
            $inputs['photo2'] = $name2;
            /** @var TYPE_NAME $product */
            $product->photo2 = $inputs['photo2'];
        }

        if ($file3 = $request->file('photo3')) {
            if (is_readable(public_path() . '/img/admin/product/' . $product->photo3) && $product->photo3 != null) {
                //            if ($product->photo3 = null) {
                unlink(public_path() . '/img/admin/product/' . $product->photo3);
            }
            $name3 = time() . $file3->getClientOriginalName();
            $img = Image::make($file3)
                ->fit('795', '795')
                ->save('img/admin/product/' . $name3);
            $inputs['photo3'] = $name3;
            /** @var TYPE_NAME $product */
            $product->photo3 = $inputs['photo3'];
        }

        if ($file4 = $request->file('photo4')) {
            if (is_readable(public_path() . '/img/admin/product/' . $product->photo4) && $product->photo4 != null) {
                unlink(public_path() . '/img/admin/product/' . $product->photo4);
            }
            $name4 = time() . $file4->getClientOriginalName();
            $file4->move('img/admin/product', $name4);
            $inputs['photo4'] = $name4;
            $product->photo4 = $inputs['photo4'];
        }

        //        if ($file5 = $request->file('photo5')) {
        //            if (is_readable(public_path() . '/img/admin/product/' . $product->photo5) && $product->photo5 != null) {
        //                unlink(public_path() . '/img/admin/product/' . $product->photo5);
        //            }
        //            $name5 = time() . $file5->getClientOriginalName();
        //            $file5->move('img/admin/product', $name5);
        //            $inputs['photo5'] = $name5;
        //            $product->photo5 = $inputs['photo5'];
        //        }

        if ($request->category == 1) {
            $product->category = 1;
        } elseif ($request->category == 2) {
            $product->category = 2;
        } elseif ($request->category == 3) {
            $product->category = 3;
        } elseif ($request->category == 4) {
            $product->category = 4;
        }

        if (!isset($request->available)) {
            $request->available = 0;
        } else {
            $request->available = 1;
        }

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->brand = $request->brand;
        $product->sub_menu_product = $request->menu_id;
        $product->discount = $request->discount;

        if ($product->save()) {
            return redirect()->back()->with('alert-success', 'محصول با موفقیت ویرایش شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ویرایش به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        if ($product->delete()) {
            if (is_readable(public_path() . '/img/admin/product/' . $product->photo1) && $product->photo1 != null) {
                unlink(public_path() . '/img/admin/product/' . $product->photo1);
            }
            if (is_readable(public_path() . '/img/admin/product/' . $product->photo2) && $product->photo2 != null) {
                unlink(public_path() . '/img/admin/product/' . $product->photo2);
            }
            if (is_readable(public_path() . '/img/admin/product/' . $product->photo3) && $product->photo3 != null) {
                unlink(public_path() . '/img/admin/product/' . $product->photo3);
            }
            if (is_readable(public_path() . '/img/admin/product/' . $product->photo4) && $product->photo4 != null) {
                unlink(public_path() . '/img/admin/product/' . $product->photo4);
            }
            //            if(is_readable(public_path() . '/img/admin/product/' . product->photo5)&& product->photo5 !=null)
            //            {
            //                unlink(public_path() . '/img/admin/product/' . product->photo5);
            //            }
            return redirect('/panel/admin/product/')->with('alert-success', 'محصول با موفقیت حذف شد. ');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در حذف به وجود آمده، دوباره سعی کنید.');
    }

    public function toggleAvailable(Product $product)
    {
        if ($product->available == 1) {
            $product->available = 0;
            $product->save();
        } elseif ($product->available == 0) {
            $product->available = 1;
            $product->save();
        }

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editColorSize($id)
    {
        $product_id = $id;
        $productTitle = Product::where('id', $id)->pluck('code');
        $menus = MenuProduct::all()->pluck('name', 'id');
        $colors = Color::all()->pluck('name', 'id');
        $sizes = Size::all()->pluck('name', 'id');

        $product = Product::where('products.id', $id)
            ->join('variants', 'variants.product_id', 'products.id')
            ->join('colors', 'colors.id', 'variants.color_id')
            ->join('sizes', 'sizes.id', 'variants.size_id')
            ->where('variants.product_id', $id)
            ->select('products.*', 'colors.name as colorName', 'sizes.name as sizeName', 'variants.id as variants_id', 'variants.many as many')
            ->get();

        return view('BackEnd.Pages.Admin.Products.editColorSize', compact('menus', 'colors', 'sizes', 'product_id', 'product', 'productTitle'));
    }

    public function updateColorSize(Request $request, Product $product)
    {
        $this->validate($request, [
            'many' => 'required|integer',
            'color' => 'required',
            'size' => 'required',
        ], [
            'many.required' => 'تعداد را وارد کنید.',
            'many.integer' => 'فقط عدد وارد کنید.',
        ]);

        // $productId=find

        $variants = new Variant();

        $variants->product_id = $request->product_id;
        $variants->color_id = $request->color;
        $variants->size_id = $request->size;
        $variants->many = $request->many;

        if ($variants->save()) {
            return redirect()->back()->with('alert-success', 'محصول با موفقیت ویرایش شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');

    }

    public function editColorSizeMany($id)
    {
        $variants_id = $id;
        return view('BackEnd.Pages.Admin.Products.editColorSizeMany', compact('variants_id'));
    }

    public function updateColorSizeMany(Request $request, Variant $variant)
    {
        $this->validate($request, [
            'many' => 'required|integer',
        ], [
            'many.required' => 'تعداد را وارد کنید.',
            'many.integer' => 'فقط عدد وارد کنید.',
        ]);

        $variant = Variant::find($request->variants_id);
        $variant->many = $request->many;

        if ($variant->update()) {
            return redirect()->back()->with('alert-success', 'تعداد با موفقیت ویرایش شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ویرایش به وجود آمده، دوباره سعی کنید.');

    }

    /**
     * Function: randomCodeGenerator
     * Returns:
     *  Return A String Code
     */
    public function randomCodeGenerator()
    {
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $code = "Ayshil-";
        for ($i = 0; $i < 7; $i++) {
            $code .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $code;
    }

}
