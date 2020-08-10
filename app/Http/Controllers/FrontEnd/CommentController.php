<?php

namespace App\Http\Controllers\FrontEnd;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,$id)
    {
        $this->validate($request, [
            'content' => 'required|max:1024',
        ], [
            'content.required' => 'لطفا نظر خود را وارد کنید. ',
            'content.max' => 'تعداد کاراکترهای وارد شده بیش از حد مجاز می باشد. ',

        ]);
        $inputs = $request->all();
        $inputs['user_id'] = auth()->user()->id;
        $inputs['food_id'] = $id;

        $comment = Comment::where('user_id' ,auth()->user()->id)->where('food_id' ,$id)->first();
        if($comment){
            return redirect()->back()->with('alert-danger','شما قبلا نظر خود را در مورد این محصولثبت کرده اید.');
        }

        if(Comment::create($inputs))
        {
            return redirect()->back()->with('alert-success','نظر شما با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger','مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');
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
        //
    }
}
