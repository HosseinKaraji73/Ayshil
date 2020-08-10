<?php

namespace App\Http\Controllers\FrontEnd;

use App\About;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::first();
        $costomers=Customer::all();
        return view('FrontEnd.Pages.aboutUs' , compact('abouts','costomers'));
    }


}
