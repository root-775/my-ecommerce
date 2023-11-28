<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use App\Models\subcategory;
use App\Models\sublistcategory;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
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
    public function store(Request $request)
    {
        $req = new product;
        $req->p_cetegory_name = $request->input('p_cetegory_name');
        $req->p_sub_cetegory_name = $request->input('p_sub_cetegory_name');
        // $req->p_sublist_category_name = $request->input('p_sublist_category_name');
        $req->p_name = $request->input('p_name');
        $req->p_sale_price = $request->input('p_sale_price');
        $req->p_sale_price_discount = $request->input('p_sale_price_discount');
        $req->p_sale_discount_percentage = $request->input('p_sale_discount_percentage');
        $req->p_desc = $request->input('p_desc');
        $newImageName = time() . '-' . $request->p_name . '.' . $request->p_img->extension();
        $request->p_img->move(public_path('images'), $newImageName);
        $req->p_img = $newImageName;
        $req->save();
        return redirect('dashbord/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product, $id=1)
    {
        $products = new product();
        $products = $products->find($id);
        return view('productdetails')->with('products', $products);
    }


    public function categoryview($name = ''){
        $sublistcategorys = DB::table('sublistcategories')->where('sub_cetegory_name', $name)->get();
        $products = DB::table('products')->where('p_sub_cetegory_name', $name)->get();
        return view('categoryview')->with('sublistcategorys', $sublistcategorys)->with('products', $products);
    }

    public function subcategoryview($name1 = '' ,$name = ''){


        $sublistcategorys = DB::table('sublistcategories')->where('sub_cetegory_name', $name1)->get();
        $products = DB::table('products')->where('p_sublist_category_name', $name)->get();
        return view('subcategoryview')->with('sublistcategorys', $sublistcategorys)->with('products', $products);

    }

    public function buyproduct($name = ''){
        $p = product::where('p_name', $name)->limit(1)->get();
        return view('buyproduct')->with('products', $p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
