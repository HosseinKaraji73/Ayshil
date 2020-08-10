<?php

namespace App\Http\Controllers\BackEnd\Admin;

use App\Http\Controllers\Controller;
use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all()->sortByDesc('created_at');
        return view('BackEnd.Pages.Admin.State.index', compact('states'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Pages.Admin.State.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'normal_post' => 'integer',
            'express_post' => 'integer',
        ], [
            'name.required' => 'نام محصول را وارد کنید.',
            'normal_post.integer' => 'فقط عدد وارد کنید.',
            'express_post.integer' => 'فقط عدد وارد کنید.',
        ]);

        $state = [
            'name' => $request->name,
            'normal_post' => $request->normal_post,
            'express_post' => $request->express_post,
        ];
        if (State::create($state)) {
            return redirect()->back()->with('alert-success', 'شهر با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        return view('BackEnd.Pages.Admin.State.show', compact('state'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        return view('BackEnd.Pages.Admin.State.edit', compact('state'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        $this->validate($request, [
            'name' => 'required',
            'normal_post' => 'integer',
            'express_post' => 'integer',
        ], [
            'name.required' => 'نام محصول را وارد کنید.',
            'normal_post.integer' => 'فقط عدد وارد کنید.',
            'express_post.integer' => 'فقط عدد وارد کنید.',
        ]);
        $state->name = $request->name;
        $state->normal_post = $request->normal_post;
        $state->express_post = $request->express_post;
        if ($state->save()) {
            return redirect()->back()->with('alert-success', 'شهر با موفقیت ثبت شد.');
        }
        return redirect()->back()->with('alert-danger', 'مشکلی در ثبت به وجود آمده، دوباره سعی کنید.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        if ($state->delete()) {
            return redirect()->route('states.index')->with('alert-success', 'شهر با موفقیت حذف شد. ');
        }
        return redirect()->route('states.index')->with('alert-danger', 'مشکلی در حذف به وجود آمده، دوباره سعی کنید.');

    }
}
