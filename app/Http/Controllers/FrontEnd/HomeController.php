<?php

namespace App\Http\Controllers\FrontEnd;

use App\Customer;
use App\Event;
use App\Http\Controllers\Controller;
use App\Product;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {

        if($request->ajax()){


            //            $keywords []= $request->keyword;
            //            return Validator::make($request->all(), [
            //                'keyword' => 'max:15',
            //                ],[
            //                    'keyword.max' => 'نام خود را وارد کنید.',
            //            ]);

            $keywords = trim($request->keyword);
            $output = "";
            $productsActive = Product::whereAvailable('1')
                ->where('description' , 'LIKE' , "%".$keywords."%")
                ->orderBy('created_at' , 'desc')
                ->paginate(20);

            if(sizeof($productsActive) > 0){
                $returnHTML=view('FrontEnd.Includes.HeaderFilter')->with(compact('productsActive'));
                return response($returnHTML);
                //                return response()->json(array('success' => true, 'html' => $returnHTML));
            }
            else{
                $returnHTML='<div class="text-center" style="width:100%">موردی یافت نشد... </div>';
                return response($returnHTML);
            }
        }
        else{


            $slider1 = Slider::all();

            $productsNew = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->get();
            $productsSpecial = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->get();
            $productsTopSelling = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->get();

            $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
            $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
            $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();


            $slider2 = Setting::find(1);

            $hoods = Product::whereAvailable('1')->where('title' , 'like' , '%'.'هود'.'%')->orderBy('created_at' , 'desc')->orderBy('updated_at' , 'desc')->paginate(12);

            $ojaghs = Product::whereAvailable('1')->where('title' , 'like' , '%'.'اجاق'.'%')->orderBy('created_at' , 'desc')->orderBy('updated_at' , 'desc')->paginate(12);

            $events = Event::orderBy('created_at' , 'desc')->get();

            $customers = Customer::orderBy('created_at' , 'desc')->get();
            $products = Product::where('discount' , '!=' , null)->limit(1)->inRandomOrder()->get();


            return view('FrontEnd.Pages.welcome' , compact('slider1' , 'productsNew' , 'productsSpecial' , 'productsTopSelling' , 'productsNew2' , 'productsSpecial2' , 'productsTopSelling2' , 'slider2' , 'hoods' , 'ojaghs' , 'events' , 'customers' , 'products'));
        }


    }



    public function ToRial($number)
    {
        echo number_format($number, 0);
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
    public function store(Request $request)
    {
        //
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
