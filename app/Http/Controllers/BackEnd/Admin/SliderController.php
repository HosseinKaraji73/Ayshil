<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('BackEnd.Pages.Admin.Sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('BackEnd.Pages.Admin.Sliders.create');
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
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Slider $slider
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Slider $slider)
    {
        return view('BackEnd.Pages.Admin.Sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Slider $slider
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'title1' => 'required',
            'title2' => 'required',
            'photo1' => 'image|max:1000',
        ], [
            'title1.required' => 'متن را وارد کنید.',
            'title2.required' => 'متن را وارد کنید.',
            'photo1.image' => 'فایل مورد نظر باید تصویر باشد. ',
            'photo1.max'   => 'حجم تصویر نباید از 1 مگابایت بیشتر باشد.',
        ]);

        if($file1 = $request->file('photo1')){
            if(is_readable(public_path() . '/img/admin/sliders/' . $slider->photo1) && $slider->photo1!=NULL){
                unlink(public_path() . '/img/admin/sliders/' . $slider->photo1);
            }
            $name1 = time() . $file1->getClientOriginalName();
            $img = Image::make($file1)
                //				->fit('1680', '600')
                //				->insert(public_path('img/admin/logo.png'), 'top')
                ->save('img/admin/sliders/' . $name1);
            $inputs['photo1'] = $name1;
            $slider->photo1 = $inputs['photo1'];
        }
        $slider->title1 = $request->title1;
        $slider->title2 = $request->title2;

        if($slider->save()){
            return redirect('/panel/admin/slider')->with('alert-success', 'اسلایدر با موفقیت ویرایش شد.');
        }
        return redirect('/panel/admin/slider')->with('alert-danger', 'مشکلی در ویرایش به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
