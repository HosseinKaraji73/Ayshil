<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $videos=Video::all();
        return view('BackEnd.Pages.Admin.Videos.index' , compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $videos=Video::all();
        return view('BackEnd.Pages.Admin.Videos.create' , compact('videos'));
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
        $this->Validate($request , [
            'link'   =>'required' ,
            'title'  =>'required' ,
            'title_en'  =>'required' ,
            'picture'=>'required' ,
        ] , [
            'link.required'   =>'آدرس لینک ویدئو را وارد کنید.' ,
            'title.required'  =>'نام ویدئو را وارد کنید.' ,
            'title_en.required'  =>'نام ویدئو را وارد کنید.' ,
            'picture.required'=>'تصویر را وارد کنید.' ,
        ]);

        $pictureSource=$request->file('picture');
//        $pictureName  =time().$pictureSource->getClientOriginalName();
        $pictureName  =$request['link'].'.jpg';
        $pictureSource->move(public_path() . '/img/admin/video/' , $pictureName);

        if($request['fav'] == '1'){
            $fav='1';
        }
        else{
            $fav='0';
        }
        $inputs=Video::create([
            'link'   =>$request['link'] ,
            'title'  =>$request['title'] ,
            'title_en'  =>$request['title_en'] ,
            'picture'=>$pictureName ,
            'fav'    =>$fav ,
            //			'picture'=>$pictureName ,
        ]);
        {
            return redirect()->back()->with('alert-success' , 'ویدیو با موفقیت اضافه شد  ');
        }
        return redirect()->back()->with('alert-danger' , 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videos=Video::find($id);
        if($videos->delete()){
            return redirect()->route('videos.index')->with('alert-success' , 'ویدئو با موفقیت حذف شد. ');
        }
        return redirect()->back()->with('alert-danger' , 'مشکلی در حذف به وجود آمده، دوباره سعی کنید.');
    }
}
