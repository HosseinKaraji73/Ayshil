<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Product;
use App\Setting;
use App\Variant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            if(isset($request->categoryValue)){
                $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

                $products = Product::
                orderBy('created_at' , 'desc')->whereAvailable('1')->whereIn('category' , $request->categoryValue)->paginate(20);

            }
            else{
                $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

                $products = Product::orderBy('created_at' , 'desc')->whereAvailable('1')->paginate(20);
            }

            $menuPic = Setting::find(1);


            if(sizeof($products) > 0){
                $returnHTML = view('FrontEnd.Pages.Products.filter' , compact('products' , 'menuPic'))->render();
                return response()->json([ 'success' => true , 'html' => $returnHTML ]);
            }
            else{
                $returnHTML = '<div class="text-center" style="width:100%">موردی یافت نشد... </div>';
                //                return response($returnHTML);
                return response()->json([ 'success' => false , 'html' => $returnHTML ]);

            }
        }
        else{
            $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(12)->get();
            $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
            $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

            $products = Product::orderBy('created_at' , 'desc')->whereAvailable('1')
                //                ->selectRaw('AVG(products.rate) as Rate')
                ->paginate(20);
            $menuPic = Setting::find(1);

        }
        return view('FrontEnd.Pages.Products.index' , compact('products' , 'menuPic' , 'productsNew2' , 'productsSpecial2' , 'productsTopSelling2'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $products = Product::find($id);
        $variants=Variant::where('product_id',$id)
            ->join('colors','variants.color_id','colors.id')
            ->join('sizes','variants.size_id','sizes.id')

            ->select('colors.*','colors.name as colorsName','sizes.name as sizesName','sizes.id as sizesId','colors.id as colorsId')
            ->get();


        $SimilarProducts = Product::orderBy('created_at' , 'desc')
            ->whereAvailable('1')
            ->where('sub_sub_menu_product' , '=' , $products->sub_sub_menu_product)
            ->paginate(15);


        return view('FrontEnd.Pages.Products.show' , compact('products','variants','SimilarProducts' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function MenuShow($id , Request $request)
    {

        if($request->ajax()){

            if(isset($request->categoryValue)){
                $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

                $products = Product::
                orderBy('created_at' , 'desc')->whereAvailable('1')->whereIn('category' , $request->categoryValue)->paginate(20);

            }
            else{
                $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

                $products = Product::orderBy('created_at' , 'desc')->whereAvailable('1')->paginate(20);
            }

            $menuPic = Setting::find(1);


            if(sizeof($products) > 0){
                $returnHTML = view('FrontEnd.Pages.Products.filter' , compact('products' , 'menuPic'))->render();
                return response()->json([ 'success' => true , 'html' => $returnHTML ]);
            }
            else{
                $returnHTML = '<div class="text-center" style="width:100%">موردی یافت نشد... </div>';
                //                return response($returnHTML);
                return response()->json([ 'success' => false , 'html' => $returnHTML ]);

            }
        }
        else{
            $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
            $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
            $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

//            $allProducts = Product::whereId($id)->pluck('sub_menu_product');
            $products = Product::whereAvailable('1')
                //                ->selectRaw('AVG(products.rate) as Rate')
            ->where('sub_menu_product','=',$id)->paginate(20);
            $menuPic = Setting::find(1);

            $cheapProducts = Product::all()->random(1);

        }
        return view('FrontEnd.Pages.Products.indexCategories' , compact('products' , 'menuPic' , 'productsNew2' , 'productsSpecial2' , 'productsTopSelling2' , 'cheapProducts'));


    }


    public function subMenuShow($id , Request $request)
    {

        if($request->ajax()){

            if(isset($request->categoryValue)){
                $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

                $products = Product::
                orderBy('created_at' , 'desc')->whereAvailable('1')->whereIn('category' , $request->categoryValue)->paginate(20);

            }
            else{
                $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

                $products = Product::orderBy('created_at' , 'desc')->whereAvailable('1')->paginate(20);
            }

            $menuPic = Setting::find(1);


            if(sizeof($products) > 0){
                $returnHTML = view('FrontEnd.Pages.Products.filter' , compact('products' , 'menuPic'))->render();
                return response()->json([ 'success' => true , 'html' => $returnHTML ]);
            }
            else{
                $returnHTML = '<div class="text-center" style="width:100%">موردی یافت نشد... </div>';
                //                return response($returnHTML);
                return response()->json([ 'success' => false , 'html' => $returnHTML ]);

            }
        }
        else{
            $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
            $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
            $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

//            $allProducts = Product::whereId($id)->pluck('sub_menu_product');
            $products = Product::whereAvailable('1')
                ->where('sub_menu_product','=',$id)
                ->orWhere('sub_sub_menu_product','=',$id)
                ->paginate(20);
            $menuPic = Setting::find(1);

            $cheapProducts = Product::all()->random(1);

        }
        return view('FrontEnd.Pages.Products.indexCategories' , compact('products' , 'menuPic' , 'productsNew2' , 'productsSpecial2' , 'productsTopSelling2' , 'cheapProducts'));


    }


    public function subSubMenuShow($id , Request $request)
    {

        if($request->ajax()){

            if(isset($request->categoryValue)){
                $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

                $products = Product::
                orderBy('created_at' , 'desc')->whereAvailable('1')->whereIn('category' , $request->categoryValue)->paginate(20);

            }
            else{
                $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
                $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

                $products = Product::orderBy('created_at' , 'desc')->whereAvailable('1')->paginate(20);
            }

            $menuPic = Setting::find(1);


            if(sizeof($products) > 0){
                $returnHTML = view('FrontEnd.Pages.Products.filter' , compact('products' , 'menuPic'))->render();
                return response()->json([ 'success' => true , 'html' => $returnHTML ]);
            }
            else{
                $returnHTML = '<div class="text-center" style="width:100%">موردی یافت نشد... </div>';
                //                return response($returnHTML);
                return response()->json([ 'success' => false , 'html' => $returnHTML ]);

            }
        }
        else{
            $productsNew2 = Product::whereAvailable('1')->whereCategory(1)->orderBy('created_at' , 'desc')->limit(6)->get();
            $productsSpecial2 = Product::whereAvailable('1')->whereCategory(3)->orderBy('created_at' , 'desc')->limit(6)->get();
            $productsTopSelling2 = Product::whereAvailable('1')->whereCategory(2)->orderBy('created_at' , 'desc')->limit(6)->get();

//            $allProducts = Product::whereId($id)->pluck('sub_sub_menu_product');
            $products = Product::whereAvailable('1')
                ->where('sub_sub_menu_product','=',$id)
                ->paginate(20);
            $menuPic = Setting::find(1);

            $cheapProducts = Product::all()->random(1);

        }
        return view('FrontEnd.Pages.Products.indexCategories' , compact('products' , 'menuPic' , 'productsNew2' , 'productsSpecial2' , 'productsTopSelling2' , 'cheapProducts'));


    }

}
